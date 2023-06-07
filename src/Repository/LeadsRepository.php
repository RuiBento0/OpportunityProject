<?php

namespace App\Repository;

use App\Entity\Leads;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Leads>
 *
 * @method Leads|null find($id, $lockMode = null, $lockVersion = null)
 * @method Leads|null findOneBy(array $criteria, array $orderBy = null)
 * @method Leads[]    findAll()
 * @method Leads[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LeadsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Leads::class);
    }

    public function save(Leads $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Leads $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function newcountLeads(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
        SELECT COUNT(id) AS counter 
        FROM leads 
        WHERE created_at >= DATE_SUB(NOW(), INTERVAL 1 WEEK)  
        
          ';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery([]);

        return $resultSet->fetchAllAssociative();
    }

    public function findByConverted(): array
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.id_status = :id')
            ->setParameter('id', 6)
            ->orderBy('l.updated_at', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult()
        ;
    }

//    /**
//     * @return Leads[] Returns an array of Leads objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Leads
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
