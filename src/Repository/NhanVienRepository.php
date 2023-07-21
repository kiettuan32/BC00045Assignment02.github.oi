<?php

namespace App\Repository;

use App\Entity\NhanVien;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NhanVien>
 *
 * @method NhanVien|null find($id, $lockMode = null, $lockVersion = null)
 * @method NhanVien|null findOneBy(array $criteria, array $orderBy = null)
 * @method NhanVien[]    findAll()
 * @method NhanVien[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NhanVienRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NhanVien::class);
    }

//    /**
//     * @return NhanVien[] Returns an array of NhanVien objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NhanVien
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
