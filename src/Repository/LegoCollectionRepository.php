<?php

namespace App\Repository;

use App\Entity\LegoCollection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LegoCollection>
 *
 * @method LegoCollection|null find($id, $lockMode = null, $lockVersion = null)
 * @method LegoCollection|null findOneBy(array $criteria, array $orderBy = null)
 * @method LegoCollection[]    findAll()
 * @method LegoCollection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LegoCollectionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LegoCollection::class);
    }

    //    /**
    //     * @return LegoCollection[] Returns an array of LegoCollection objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('l.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?LegoCollection
    //    {
    //        return $this->createQueryBuilder('l')
    //            ->andWhere('l.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
