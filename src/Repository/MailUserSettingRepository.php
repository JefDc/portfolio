<?php

namespace App\Repository;

use App\Entity\MailUserSetting;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MailUserSetting|null find($id, $lockMode = null, $lockVersion = null)
 * @method MailUserSetting|null findOneBy(array $criteria, array $orderBy = null)
 * @method MailUserSetting[]    findAll()
 * @method MailUserSetting[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MailUserSettingRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MailUserSetting::class);
    }

    // /**
    //  * @return MailUserSetting[] Returns an array of MailUserSetting objects
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
    public function findOneBySomeField($value): ?MailUserSetting
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
