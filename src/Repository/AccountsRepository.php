<?php

namespace App\Repository;

use App\Entity\Accounts;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Accounts>
 *
 * @method Accounts|null find($id, $lockMode = null, $lockVersion = null)
 * @method Accounts|null findOneBy(array $criteria, array $orderBy = null)
 * @method Accounts[]    findAll()
 * @method Accounts[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccountsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Accounts::class);
    }

    public function save(Accounts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Accounts $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function countAccounts(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
            SELECT COUNT(id) AS counter
            FROM accounts
            
          ';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery([]);

        return $resultSet->fetchAllAssociative();
    }

    public function newcountAccounts(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
        SELECT COUNT(id) AS counter 
        FROM accounts 
        WHERE created_at >= DATE_SUB(NOW(), INTERVAL 1 WEEK)  

           
            
          ';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery([]);

        return $resultSet->fetchAllAssociative();
    }
    
    public function listAccounts(): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
                SELECT a.id, a.name,
                (SELECT GROUP_CONCAT(ph.phone SEPARATOR " / ") 
                    FROM phones ph
                    WHERE ph.id_entity_id = 3 AND ph.id_in_relation = a.id ) AS phones ,
                (SELECT GROUP_CONCAT(e.email SEPARATOR " / ") 
                    FROM emails e
                    WHERE e.id_entity_id = 3 AND e.id_in_relation = a.id )
                as emails,
                (SELECT GROUP_CONCAT(ad.address SEPARATOR " / ") 
                    FROM addresses ad
                    WHERE ad.id_entity_id = 3 AND ad.id_in_relation = a.id )
                as addresses
            FROM accounts a

            ';

        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery([]);

        return $resultSet->fetchAllAssociative();
    }

    public function SetNullOpp($id): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
        UPDATE opportunities SET id_account_id = NULL WHERE id_account_id = :id            ';
        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery(['id' => $id ]);

        return $resultSet->fetchAllAssociative();
    }

    public function listAccount($id): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = '
        SELECT a.id, a.name,a.created_by_id,a.created_at,a.updated_by_id,a.updated_at,a.description,a.id_user_id,a.id_type_id,a.id_area_id,
        (SELECT GROUP_CONCAT(ph.phone SEPARATOR " / ") 
            FROM phones ph
            WHERE ph.id_entity_id = 3 AND ph.id_in_relation = a.id ) AS phones ,
        (SELECT GROUP_CONCAT(e.email SEPARATOR " / ") 
            FROM emails e
            WHERE e.id_entity_id = 3 AND e.id_in_relation = a.id )
        as emails,
        (SELECT GROUP_CONCAT(ad.address SEPARATOR " / ") 
            FROM addresses ad
            WHERE ad.id_entity_id = 3 AND ad.id_in_relation = a.id )
        as addresses,u.name as name_created,u2.name as name_updated,a1.name as name_area
    FROM accounts a
    INNER JOIN users u ON u.id = a.created_by_id
    INNER JOIN users u2 ON u2.id = a.updated_by_id
    INNER JOIN area a1 ON a1.id = a.id_area_id
    WHERE a.id = '.$id
            ;

        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery([]);

        return $resultSet->fetchAllAssociative();
    }

    public function FindbyAccount($id): array
    {
        $conn = $this->getEntityManager()->getConnection();

        $sql = 'SELECT a.id,a.name,a.created_by_id,a.created_at,a.updated_by_id,a.updated_at,a.description,a.id_user_id,a.id_type_id,a.id_area_id,u.name AS createdby, uu.name AS updateby
        FROM accounts a 
        LEFT JOIN contacts c ON c.id = a.contacts_id
        LEFT JOIN users u ON u.id = a.created_by_id 
        LEFT JOIN users uu ON uu.id = a.updated_by_id 
        WHERE a.id ='.$id
            ;

        $stmt = $conn->prepare($sql);
        $resultSet = $stmt->executeQuery([]);

        return $resultSet->fetchAllAssociative();
    }


     


//    /**
//     * @return Accounts[] Returns an array of Accounts objects
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

//    public function findOneBySomeField($value): ?Accounts
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
