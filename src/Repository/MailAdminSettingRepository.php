<?php

namespace App\Repository;

use App\Entity\MailAdminSetting;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MailAdminSetting|null find($id, $lockMode = null, $lockVersion = null)
 * @method MailAdminSetting|null findOneBy(array $criteria, array $orderBy = null)
 * @method MailAdminSetting[]    findAll()
 * @method MailAdminSetting[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MailAdminSettingRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MailAdminSetting::class);
    }

    // /**
    //  * @return MailAdminSetting[] Returns an array of MailAdminSetting objects
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
    public function findOneBySomeField($value): ?MailAdminSetting
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
