<?php

namespace App\Repository;

use App\Entity\Lego;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Lego>
 *
 * @method Lego|null find($id, $lockMode = null, $lockVersion = null)
 * @method Lego|null findOneBy(array $criteria, array $orderBy = null)
 * @method Lego[]    findAll()
 * @method Lego[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LegoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Lego::class);
    }

    //    /**
    //     * @return Lego[] Returns an array of Lego objects
    //     */
       public function findByCollection($value): array
       {
           return $this->createQueryBuilder('l')
               ->andWhere('l.exampleField = :val')
               ->setParameter('val', $value)
               ->orderBy('l.id', 'ASC')
               ->setMaxResults(10)
               ->getQuery()
               ->getResult()
           ;
       }

    //    public function findOneBySomeField($value): ?Lego
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
