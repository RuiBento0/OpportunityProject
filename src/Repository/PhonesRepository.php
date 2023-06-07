<?php

namespace App\Repository;

use App\Entity\Phones;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Phones>
 *
 * @method Phones|null find($id, $lockMode = null, $lockVersion = null)
 * @method Phones|null findOneBy(array $criteria, array $orderBy = null)
 * @method Phones[]    findAll()
 * @method Phones[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PhonesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Phones::class);
    }

    public function save(Phones $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Phones $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function deletePhonebyId($entity, $idinrelation): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            DELETE FROM phones
            WHERE id_entity_id = :entity AND id_in_relation = :idinrelation
            ';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery(['entity' => $entity,'idinrelation' => $idinrelation ]);

        return $resultSet->fetchAllAssociative();
    }

    public function findPhonebyId($entity, $idinrelation): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM phones
            WHERE id_entity_id = :entity AND id_in_relation = :idinrelation
            ';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery(['entity' => $entity,'idinrelation' => $idinrelation ]);

        return $resultSet->fetchAllAssociative();
    }

//    /**
//     * @return Phones[] Returns an array of Phones objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Phones
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
