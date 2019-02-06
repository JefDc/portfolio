<?php

namespace App\Repository;

use App\Entity\Intro;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Intro|null find($id, $lockMode = null, $lockVersion = null)
 * @method Intro|null findOneBy(array $criteria, array $orderBy = null)
 * @method Intro[]    findAll()
 * @method Intro[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IntroRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Intro::class);
    }

    // /**
    //  * @return Intro[] Returns an array of Intro objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Intro
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
