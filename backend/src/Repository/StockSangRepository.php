<?php

namespace App\Repository;

use App\Entity\StockSang;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StockSang>
 *
 * @method StockSang|null find($id, $lockMode = null, $lockVersion = null)
 * @method StockSang|null findOneBy(array $criteria, array $orderBy = null)
 * @method StockSang[]    findAll()
 * @method StockSang[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StockSangRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StockSang::class);
    }

//    /**
//     * @return StockSang[] Returns an array of StockSang objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?StockSang
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
