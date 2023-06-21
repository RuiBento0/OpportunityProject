<?php

namespace App\Repository;

use App\Entity\Opportunities;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Opportunities>
 *
 * @method Opportunities|null find($id, $lockMode = null, $lockVersion = null)
 * @method Opportunities|null findOneBy(array $criteria, array $orderBy = null)
 * @method Opportunities[]    findAll()
 * @method Opportunities[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OpportunitiesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Opportunities::class);
    }

    public function save(Opportunities $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Opportunities $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
    public function newcountOpportunities(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
        SELECT COUNT(id) AS counter 
        FROM opportunities 
        WHERE created_at >= DATE_SUB(NOW(), INTERVAL 1 WEEK)  
        
          ';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery([]);

        return $resultSet->fetchAllAssociative();
    }

    public function findByStatus($status): array
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.id_stage = :stat')
            ->setParameter('stat', $status)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findByAccounts($accounts): array
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.id_account = :id')
            ->setParameter('id', $accounts)
            ->orderBy('o.updated_at', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findByLead($id): array
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.lead_id = :id')
            ->setParameter('id', $id)
            ->orderBy('o.updated_at', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findByWon(): array
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.id_stage = 4')
            ->orderBy('o.updated_at', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }

//    /**
//     * @return Opportunities[] Returns an array of Opportunities objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Opportunities
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
