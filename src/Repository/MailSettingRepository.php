<?php

namespace App\Repository;

use App\Entity\MailSetting;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method MailSetting|null find($id, $lockMode = null, $lockVersion = null)
 * @method MailSetting|null findOneBy(array $criteria, array $orderBy = null)
 * @method MailSetting[]    findAll()
 * @method MailSetting[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MailSettingRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, MailSetting::class);
    }

    // /**
    //  * @return MailSetting[] Returns an array of MailSetting objects
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
    public function findOneBySomeField($value): ?MailSetting
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
