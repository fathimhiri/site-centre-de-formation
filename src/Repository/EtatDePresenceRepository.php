<?php

namespace App\Repository;

use App\Entity\EtatDePresence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EtatDePresence|null find($id, $lockMode = null, $lockVersion = null)
 * @method EtatDePresence|null findOneBy(array $criteria, array $orderBy = null)
 * @method EtatDePresence[]    findAll()
 * @method EtatDePresence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EtatDePresenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EtatDePresence::class);
    }

    // /**
    //  * @return EtatDePresence[] Returns an array of EtatDePresence objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EtatDePresence
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
