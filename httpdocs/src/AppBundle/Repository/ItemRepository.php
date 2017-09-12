<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;

/**
 * Class ItemRepository
 *
 * @package AppBundle\Repository
 */
class ItemRepository extends EntityRepository {

  /**
   * @param $limit
   * @param $page
   * @param array $sorting
   *
   * @return \Pagerfanta\Pagerfanta
   */
  public function findAllPaginated($limit, $page, array $sorting = array())
  {
    $fields = array_keys($this->getClassMetadata()->fieldMappings);
    $queryBuilder = $this->createQueryBuilder('i')
			->where("STR_TO_DATE(i.flgdataeliminaz, '%d/%m/%Y') < :today")
			->setParameter('today', Date('d/m/Y'));

    foreach ($fields as $field) {
      if (isset($sorting[$field])) {
        $direction = ($sorting[$field] === 'asc') ? 'asc' : 'desc';
        $queryBuilder->addOrderBy('i.'.$field, $direction);
      }
    }

    $pagerAdapter = new DoctrineORMAdapter($queryBuilder);
    $pager = new Pagerfanta($pagerAdapter);
    $pager->setCurrentPage($page);
    $pager->setMaxPerPage($limit);

    return $pager;
  }
	
	/**
	 * Estraggo gli item che hanno valori inconsistenti;
	 *
	 * @return array
	 */
  public function findAllInconsistencies() {
		$em = $this->getEntityManager();
		$query = $em->createQuery(
			'SELECT i
    FROM AppBundle:Item i
    WHERE i.codumis NOT IN (SELECT u.codumis FROM AppBundle:Unitmeasure u)
    OR i.codfammerc NOT IN (SELECT c.codrep FROM AppBundle:Category c)
    OR i.codfornitore NOT IN (SELECT p.codint FROM AppBundle:Partner p)
    OR i.codrepecr NOT IN (SELECT d.codrep FROM AppBundle:Departement d)
    OR i.flgstatoarticolo NOT IN (SELECT s.codstato FROM AppBundle:Status s)'
		);
		
		return $query->getResult();
	}


}