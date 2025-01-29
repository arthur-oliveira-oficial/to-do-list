<?php

namespace App\Controller;

use App\Entity\Tarefa;
use App\Entity\Lista;
use App\Entity\Usuario;
use App\Repository\TarefaRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Serializer\SerializerInterface;
use Nelmio\ApiDocBundle\Annotation\Model;
use OpenApi\Attributes as OA;

#[Route('/api/tarefa')]
#[OA\Tag(name: 'Tarefas')]
class TarefaController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'tarefa_index', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    #[OA\Response(
        response: 200,
        description: 'Retorna a lista de tarefas que o usuário tem acesso',
        content: new OA\JsonContent(
            type: 'array',
            items: new OA\Items(ref: new Model(type: Tarefa::class, groups: ['tarefa:read']))
        )
    )]
    public function index(TarefaRepository $tarefaRepository, SerializerInterface $serializer): JsonResponse
    {
        /** @var Usuario $usuario */
        $usuario = $this->getUser();

        // Busca todas as tarefas das listas que o usuário tem acesso
        $tarefas = $tarefaRepository->createQueryBuilder('t')
            ->leftJoin('t.lista', 'l')
            ->leftJoin('l.usuariosCompartilhados', 'uc')
            ->where('l.usuario = :usuario OR uc = :usuario')
            ->setParameter('usuario', $usuario)
            ->getQuery()
            ->getResult();

        $json = $serializer->serialize($tarefas, 'json', ['groups' => 'tarefa:read']);
        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    #[Route('/lista/{listaId}', name: 'tarefa_new', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    #[OA\Response(
        response: 201,
        description: 'Cria uma nova tarefa',
        content: new Model(type: Tarefa::class, groups: ['tarefa:read'])
    )]
    #[OA\Parameter(
        name: 'listaId',
        in: 'path',
        description: 'ID da lista à qual a tarefa será adicionada',
        schema: new OA\Schema(type: 'integer')
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\JsonContent(ref: new Model(type: Tarefa::class, groups: ['tarefa:write']))
    )]
    public function new(Request $request, int $listaId, SerializerInterface $serializer): JsonResponse
    {
        $lista = $this->entityManager->getRepository(Lista::class)->find($listaId);
        if (!$lista) {
            return new JsonResponse(['error' => 'Lista não encontrada.'], Response::HTTP_NOT_FOUND);
        }

        $this->denyAccessUnlessGranted('add_tarefa', $lista);

        $data = json_decode($request->getContent(), true);

        $tarefa = new Tarefa();
        $tarefa->setDescricao($data['descricao']);
        $tarefa->setConcluida(false);
        $tarefa->setDataCriacao(new \DateTime());
        $tarefa->setLista($lista);

        $this->entityManager->persist($tarefa);
        $this->entityManager->flush();

        $json = $serializer->serialize($tarefa, 'json', ['groups' => 'tarefa:read']);

        return new JsonResponse($json, Response::HTTP_CREATED, [], true);
    }

    #[Route('/{id}', name: 'tarefa_show', methods: ['GET'])]
    #[IsGranted('ROLE_USER')]
    #[OA\Response(
        response: 200,
        description: 'Retorna uma tarefa específica',
        content: new Model(type: Tarefa::class, groups: ['tarefa:read'])
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        description: 'ID da tarefa',
        schema: new OA\Schema(type: 'integer')
    )]
    public function show(Tarefa $tarefa, SerializerInterface $serializer): JsonResponse
    {
        $this->denyAccessUnlessGranted('view', $tarefa);

        $json = $serializer->serialize($tarefa, 'json', ['groups' => 'tarefa:read']);
        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    #[Route('/{id}', name: 'tarefa_edit', methods: ['PUT'])]
    #[IsGranted('ROLE_USER')]
    #[OA\Response(
        response: 200,
        description: 'Atualiza uma tarefa',
        content: new Model(type: Tarefa::class, groups: ['tarefa:read'])
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        description: 'ID da tarefa',
        schema: new OA\Schema(type: 'integer')
    )]
    #[OA\RequestBody(
        required: true,
        content: new OA\JsonContent(ref: new Model(type: Tarefa::class, groups: ['tarefa:write']))
    )]
    public function edit(Request $request, Tarefa $tarefa, SerializerInterface $serializer): JsonResponse
    {
        $this->denyAccessUnlessGranted('edit', $tarefa);

        $data = json_decode($request->getContent(), true);

        isset($data['descricao']) && $tarefa->setDescricao($data['descricao']);
        if (isset($data['concluida'])) {
            $tarefa->setConcluida($data['concluida']);
            $tarefa->setDataConclusao($data['concluida'] ? new \DateTime() : null);
        }

        $this->entityManager->flush();

        $json = $serializer->serialize($tarefa, 'json', ['groups' => 'tarefa:read']);

        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    #[Route('/{id}', name: 'tarefa_delete', methods: ['DELETE'])]
    #[IsGranted('ROLE_USER')]
    #[OA\Response(
        response: 204,
        description: 'Exclui uma tarefa'
    )]
    #[OA\Parameter(
        name: 'id',
        in: 'path',
        description: 'ID da tarefa',
        schema: new OA\Schema(type: 'integer')
    )]
    public function delete(Tarefa $tarefa): JsonResponse
    {
        $this->denyAccessUnlessGranted('delete', $tarefa);

        $this->entityManager->remove($tarefa);
        $this->entityManager->flush();

        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }
}