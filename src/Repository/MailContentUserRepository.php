<?php

namespace App\Repository;

use App\Entity\MailContentUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MailContentUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method MailContentUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method MailContentUser[]    findAll()
 * @method MailContentUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MailContentUserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MailContentUser::class);
    }

    // /**
    //  * @return MailContentUser[] Returns an array of MailContentUser objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MailContentUser
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
