<?php

namespace App\DataFixtures;

use App\Entity\Usuario;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }

    public function load(ObjectManager $manager): void
    {
        // Usuário Admin
        $admin = new Usuario();
        $admin->setEmail('admin@teste.com');
        $admin->setRoles(['ROLE_ADMIN']);
        $password = $this->hasher->hashPassword($admin, 'admin12345');
        $admin->setPassword($password);
        $manager->persist($admin);

        // Usuário Cliente 1
        $cliente = new Usuario();
        $cliente->setEmail('cliente1@teste.com');
        $cliente->setRoles(['ROLE_USER']);
        $password = $this->hasher->hashPassword($cliente, 'cliente12345');
        $cliente->setPassword($password);
        $manager->persist($cliente);

        // Usuário Cliente 2
        $cliente = new Usuario();
        $cliente->setEmail('cliente2@teste.com');
        $cliente->setRoles(['ROLE_USER']);
        $password = $this->hasher->hashPassword($cliente, 'cliente12345');
        $cliente->setPassword($password);
        $manager->persist($cliente);

        $manager->flush();
    }
}