<?php

namespace App\Repository;

use App\Entity\AuctionItem;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AuctionItem|null find($id, $lockMode = null, $lockVersion = null)
 * @method AuctionItem|null findOneBy(array $criteria, array $orderBy = null)
 * @method AuctionItem[]    findAll()
 * @method AuctionItem[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AuctionItemRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AuctionItem::class);
    }

    // /**
    //  * @return AuctionItem[] Returns an array of AuctionItem objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AuctionItem
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
