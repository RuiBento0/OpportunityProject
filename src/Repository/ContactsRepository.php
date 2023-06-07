<?php

namespace App\Repository;

use App\Entity\Contacts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Contacts>
 *
 * @method Contacts|null find($id, $lockMode = null, $lockVersion = null)
 * @method Contacts|null findOneBy(array $criteria, array $orderBy = null)
 * @method Contacts[]    findAll()
 * @method Contacts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Contacts::class);
    }

    public function save(Contacts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Contacts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function createOrderedByVotesQueryBuilder(string $genre = null): QueryBuilder
    {
        $queryBuilder = $this->addOrderByVotesQueryBuilder();
        if ($genre) {
            $queryBuilder->andWhere('mix.genre = :genre')
                ->setParameter('genre', $genre);
        }
        return $queryBuilder;
    }
    private function addOrderByVotesQueryBuilder(QueryBuilder $queryBuilder = null): QueryBuilder
    {
        $queryBuilder = $queryBuilder ?? $this->createQueryBuilder('mix');
        return $queryBuilder->orderBy('mix.votes', 'DESC');
    }

    public function listContacts(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT c.id, c.name,c.id_account_id,c.surname,c.id_user_id,c.id_account_id AS account,
                (SELECT GROUP_CONCAT(ph.phone SEPARATOR " / ") 
                    FROM phones ph
                    WHERE ph.id_entity_id = 4 AND ph.id_in_relation = c.id ) AS phones ,
                (SELECT GROUP_CONCAT(e.email SEPARATOR " / ") 
                    FROM emails e
                    WHERE e.id_entity_id = 4 AND e.id_in_relation = c.id )
                as emails, acc.name as accname
            FROM contacts c
            LEFT JOIN accounts acc ON acc.id = c.id_account_id 

            ';

        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery([]);

        return $resultSet->fetchAllAssociative();
    }

    public function SetNullOpp($id): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
        UPDATE opportunities SET id_contact_id = NULL WHERE id_contact_id = :id            ';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery(['id' => $id ]);

        return $resultSet->fetchAllAssociative();
    }

//    public function findOneBySomeField($value): ?VinylMix
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }

//    /**
//     * @return Contacts[] Returns an array of Contacts objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Contacts
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
