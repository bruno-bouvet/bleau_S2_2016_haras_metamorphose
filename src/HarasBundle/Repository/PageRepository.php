<?php

namespace HarasBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * PageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PageRepository extends EntityRepository
{
	public function findArticles($pageNb)
	{
		// $qb = $this->createQueryBuilder('articles')
  //       $qb = $em->createQueryBuilder("
  //           SELECT article_id
  //           FROM pages_articles AS pa
  //           JOIN article AS a ON a.id = pa.article_id
  //           WHERE pa.page_id = ".$page->getId()."
  //           ORDER BY a.createAt DESC
  //           LIMIT 10 OFFSET ".$offset);
  //       // $query = $qb->getResult();
  //       // var_dump($query);
  //       $repository = $em->getRepository('YourNamespaceYourBundle:User');
  //       $query = $repository->createQueryBuilder('u')
  //           ->innerJoin('u.groups', 'g')
  //           ->where('g.id = :group_id')
  //           ->setParameter('group_id', 5)
  //           ->getQuery()->getResult();
	}
}
