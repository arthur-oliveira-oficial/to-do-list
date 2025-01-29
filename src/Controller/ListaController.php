<?php

namespace App\Controller;

use App\Entity\Lista;
use App\Entity\Usuario;
use App\Repository\ListaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api/lista')]
class ListaController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'lista_index', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function index(ListaRepository $listaRepository, SerializerInterface $serializer): JsonResponse
    {
        /** @var Usuario $usuario */
        $usuario = $this->getUser();

        // Busca todas as listas do usuário, incluindo as compartilhadas
        $listas = $listaRepository->createQueryBuilder('l')
            ->leftJoin('l.usuariosCompartilhados', 'uc')
            ->where('l.usuario = :usuario OR uc = :usuario')
            ->setParameter('usuario', $usuario)
            ->getQuery()
            ->getResult();

        $json = $serializer->serialize($listas, 'json', ['groups' => 'lista:read']);
        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    #[Route('/', name: 'lista_new', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function new(Request $request, SerializerInterface $serializer): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $lista = new Lista();
        $lista->setNome($data['nome']);
        $lista->setUsuario($this->getUser());

        $this->entityManager->persist($lista);
        $this->entityManager->flush();

        $json = $serializer->serialize($lista, 'json', ['groups' => 'lista:read']);

        return new JsonResponse($json, Response::HTTP_CREATED, [], true);
    }

    #[Route('/{id}', name: 'lista_show', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    public function show(Lista $lista, SerializerInterface $serializer): JsonResponse
    {
        $this->denyAccessUnlessGranted('view', $lista);

        $json = $serializer->serialize($lista, 'json', ['groups' => 'lista:read']);
        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    #[Route('/{id}', name: 'lista_edit', methods: ['PUT'])]
    #[IsGranted('ROLE_USER')]
    public function edit(Request $request, Lista $lista, SerializerInterface $serializer): JsonResponse
    {
        $this->denyAccessUnlessGranted('edit', $lista);

        $data = json_decode($request->getContent(), true);

        isset($data['nome']) && $lista->setNome($data['nome']);

        $this->entityManager->flush();

        $json = $serializer->serialize($lista, 'json', ['groups' => 'lista:read']);

        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    #[Route('/{id}', name: 'lista_delete', methods: ['DELETE'])]
    #[IsGranted('ROLE_USER')]
    public function delete(Lista $lista): JsonResponse
    {
        $this->denyAccessUnlessGranted('delete', $lista);

        $this->entityManager->remove($lista);
        $this->entityManager->flush();

        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }

    #[Route('/{id}/compartilhar', name: 'lista_compartilhar', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function compartilhar(Request $request, Lista $lista, EntityManagerInterface $em): JsonResponse
    {
        $this->denyAccessUnlessGranted('edit', $lista); // Apenas o dono da lista pode compartilhar

        $data = json_decode($request->getContent(), true);
        $usuarioId = $data['usuarioId'];

        $usuario = $em->getRepository(Usuario::class)->find($usuarioId);

        if (!$usuario) {
            return new JsonResponse(['error' => 'Usuário não encontrado.'], Response::HTTP_BAD_REQUEST);
        }

        $lista->addUsuariosCompartilhado($usuario);
        $em->flush();

        return new JsonResponse(['message' => 'Lista compartilhada com sucesso.'], Response::HTTP_OK);
    }
}