<?php

namespace App\Controller;

use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\FOSRestController;
use App\Entity\Item;
use Hateoas\Configuration\Annotation as Hateoas;
use Hateoas\Configuration\Route;
use Hateoas\Representation\Factory\PagerfantaFactory;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ItemController
 *
 * @package App\Controller
 *
 * @Hateoas\Relation("self", href=@Hateoas\Route("get_items"))
 */
class ItemController extends FOSRestController implements ClassResourceInterface
{
		
		/**
		 * @param \Symfony\Component\HttpFoundation\Request $request
		 *
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function cgetAction(Request $request)
		{
				
				$limit = $request->query->getInt('limit', 10);
				$page = $request->query->getInt('page', 1);
				$sorting = $request->query->get('sorting', []);
				
				$productsPager = $this->getDoctrine()
					->getRepository(Item::class)
					->findAllPaginated($limit, $page, $sorting);
				
				$pagerFactory = new PagerfantaFactory();
				
				$data = $pagerFactory->createRepresentation(
					$productsPager,
					new Route(
						'get_items', [
						'limit' => $limit,
						'page' => $page,
						'sorting' => $sorting,
					]
					)
				);
				
				$view = $this->view($data, 200)
					->setTemplate("App:Item:getItems.html.twig")
					->setTemplateVar('items');
				
				return $this->handleView($view);
		}
		
		/**
		 * @param $id
		 *
		 * @return \Symfony\Component\HttpFoundation\Response
		 */
		public function getAction($id)
		{
				$data = $this->getDoctrine()
					->getRepository(Item::class)
					->find($id);
				$view = $this->view($data, 200)
					->setTemplate("App:Item:getItem.html.twig")
					->setTemplateVar('item');
				
				return $this->handleView($view);
		}
}
