<?php

namespace App\Repository;

use App\Entity\Addresses;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Addresses>
 *
 * @method Addresses|null find($id, $lockMode = null, $lockVersion = null)
 * @method Addresses|null findOneBy(array $criteria, array $orderBy = null)
 * @method Addresses[]    findAll()
 * @method Addresses[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AddressesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Addresses::class);
    }

    public function save(Addresses $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Addresses $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function deleteAddressbyId($entity, $idinrelation): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            DELETE FROM addresses
            WHERE id_entity_id = :entity AND id_in_relation = :idinrelation
            ';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery(['entity' => $entity,'idinrelation' => $idinrelation ]);

        return $resultSet->fetchAllAssociative();
    }

    public function findAddressbyId($entity, $idinrelation): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT * FROM addresses
            WHERE id_entity_id = :entity AND id_in_relation = :idinrelation
            ';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery(['entity' => $entity,'idinrelation' => $idinrelation ]);

        return $resultSet->fetchAllAssociative();
    }

//    /**
//     * @return Addresses[] Returns an array of Addresses objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Addresses
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
