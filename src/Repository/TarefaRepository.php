<?php

namespace App\Repository;

use App\Entity\Tarefa;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tarefa>
 *
 * @method Tarefa|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tarefa|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tarefa[]    findAll()
 * @method Tarefa[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TarefaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tarefa::class);
    }
}