<?php

namespace App\Repository;

use App\Entity\Receveur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Receveur>
 *
 * @method Receveur|null find($id, $lockMode = null, $lockVersion = null)
 * @method Receveur|null findOneBy(array $criteria, array $orderBy = null)
 * @method Receveur[]    findAll()
 * @method Receveur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReceveurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Receveur::class);
    }

//    /**
//     * @return Receveur[] Returns an array of Receveur objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Receveur
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
