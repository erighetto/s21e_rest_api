<?php

namespace App\Repository;

use Doctrine\ORM\EntityRepository;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;

/**
 * Class ItemRepository
 *
 * @package App\Repository
 */
class ItemRepository extends EntityRepository
{
		
		/**
		 * @param $limit
		 * @param $page
		 * @param array $sorting
		 *
		 * @return \Pagerfanta\Pagerfanta
		 */
		public function findAllPaginated($limit, $page, array $sorting = [])
		{
				$fields = array_keys($this->getClassMetadata()->fieldMappings);
				$queryBuilder = $this->createQueryBuilder('i')
					->where("STR_TO_DATE(i.flgdataeliminaz, '%d/%m/%Y') > NOW()");
				
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
		
		
}