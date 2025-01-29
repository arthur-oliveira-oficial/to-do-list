<?php

namespace App\Repository;

use App\Entity\Lista;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Lista>
 *
 * @method Lista|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lista|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lista[]    findAll()
 * @method Lista[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lista::class);
    }
}