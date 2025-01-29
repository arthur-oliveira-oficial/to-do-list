<?php

namespace App\Controller;

use App\Entity\Usuario;
use App\Repository\UsuarioRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\Serializer\SerializerInterface;

#[Route('/api/usuarios')]
#[IsGranted('ROLE_ADMIN')]
class UsuarioController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'usuario_index', methods: ['GET'])]
    public function index(UsuarioRepository $usuarioRepository, SerializerInterface $serializer): JsonResponse
    {
        $usuarios = $usuarioRepository->findAll();
        $json = $serializer->serialize($usuarios, 'json', ['groups' => 'usuario:read']);
        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    #[Route('/', name: 'usuario_new', methods: ['POST'])]
    public function new(Request $request, UserPasswordHasherInterface $passwordHasher, SerializerInterface $serializer): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $usuario = new Usuario();
        $usuario->setEmail($data['email']);
        $usuario->setRoles($data['roles']);

        $hashedPassword = $passwordHasher->hashPassword(
            $usuario,
            $data['password']
        );
        $usuario->setPassword($hashedPassword);

        $this->entityManager->persist($usuario);
        $this->entityManager->flush();

        $json = $serializer->serialize($usuario, 'json', ['groups' => 'usuario:read']);

        return new JsonResponse($json, Response::HTTP_CREATED, [], true);
    }

    #[Route('/{id}', name: 'usuario_show', methods: ['GET'])]
    public function show(Usuario $usuario, SerializerInterface $serializer): JsonResponse
    {
        $json = $serializer->serialize($usuario, 'json', ['groups' => 'usuario:read']);
        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    #[Route('/{id}', name: 'usuario_edit', methods: ['PUT'])]
    public function edit(Request $request, Usuario $usuario, UserPasswordHasherInterface $passwordHasher, SerializerInterface $serializer): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        isset($data['email']) && $usuario->setEmail($data['email']);
        isset($data['roles']) && $usuario->setRoles($data['roles']);

        if (isset($data['password'])) {
            $hashedPassword = $passwordHasher->hashPassword(
                $usuario,
                $data['password']
            );
            $usuario->setPassword($hashedPassword);
        }

        $this->entityManager->flush();

        $json = $serializer->serialize($usuario, 'json', ['groups' => 'usuario:read']);

        return new JsonResponse($json, Response::HTTP_OK, [], true);
    }

    #[Route('/{id}', name: 'usuario_delete', methods: ['DELETE'])]
    public function delete(Usuario $usuario): JsonResponse
    {
        $this->entityManager->remove($usuario);
        $this->entityManager->flush();

        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }
}