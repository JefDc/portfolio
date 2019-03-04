<?php

namespace App\Repository;

use App\Entity\MailContentAdmin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MailContentAdmin|null find($id, $lockMode = null, $lockVersion = null)
 * @method MailContentAdmin|null findOneBy(array $criteria, array $orderBy = null)
 * @method MailContentAdmin[]    findAll()
 * @method MailContentAdmin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MailContentAdminRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MailContentAdmin::class);
    }

    // /**
    //  * @return MailContentAdmin[] Returns an array of MailContentAdmin objects
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
    public function findOneBySomeField($value): ?MailContentAdmin
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
