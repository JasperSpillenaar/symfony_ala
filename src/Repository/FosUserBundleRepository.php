<?php

namespace App\Repository;

use App\Entity\FosUserBundle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FosUserBundle|null find($id, $lockMode = null, $lockVersion = null)
 * @method FosUserBundle|null findOneBy(array $criteria, array $orderBy = null)
 * @method FosUserBundle[]    findAll()
 * @method FosUserBundle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FosUserBundleRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FosUserBundle::class);
    }

    // /**
    //  * @return FosUserBundle[] Returns an array of FosUserBundle objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FosUserBundle
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
