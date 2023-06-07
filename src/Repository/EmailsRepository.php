<?php

namespace App\Repository;

use App\Entity\Emails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Emails>
 *
 * @method Emails|null find($id, $lockMode = null, $lockVersion = null)
 * @method Emails|null findOneBy(array $criteria, array $orderBy = null)
 * @method Emails[]    findAll()
 * @method Emails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EmailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Emails::class);
    }

    public function save(Emails $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Emails $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function deleteEmailbyId($entity, $idinrelation): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            DELETE FROM emails
            WHERE id_entity_id = :entity AND id_in_relation = :idinrelation
            ';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery(['entity' => $entity,'idinrelation' => $idinrelation ]);

        return $resultSet->fetchAllAssociative();
    }

    public function findEmailbyId($entity, $idinrelation): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM emails
            WHERE id_entity_id = :entity AND id_in_relation = :idinrelation
            ';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery(['entity' => $entity,'idinrelation' => $idinrelation ]);

        return $resultSet->fetchAllAssociative();
    }

//    /**
//     * @return Emails[] Returns an array of Emails objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Emails
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
