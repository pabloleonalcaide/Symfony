<?php
namespace Blogger\BlogBundle\Repository;
use Doctrine\ORM\EntityRepository;
/** Repositorio de consultas con las que trabajaremos en nuestro proyecto*/

class BlogRepository extends EntityRepository{

  public function getLatestBlog($limit = null){
    $qb = $this->createQueryBuilder('b')
      ->select('b')
      ->addOrderBy('b.created','DESC');
      if (false == is_null($limit)){
        ($qb)->setMaxResults($limit);
      }
      return $qb->getQuery()
                ->getResult();
  }
}
?>
