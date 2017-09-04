<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\FOSRestController;
use AppBundle\Entity\Item;
use Hateoas\Configuration\Route;
use Hateoas\Representation\Factory\PagerfantaFactory;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ItemController
 *
 * @package AppBundle\Controller
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

    $queryBuilder = $this->getDoctrine()->getManager()->createQueryBuilder()
      ->select('i')
      ->from('AppBundle:Item', 'i');

    $pagerAdapter = new DoctrineORMAdapter($queryBuilder);
    $pager = new Pagerfanta($pagerAdapter);
    $pager->setCurrentPage($page);
    $pager->setMaxPerPage($limit);

    $pagerFactory = new PagerfantaFactory();

    $data = $pagerFactory->createRepresentation(
      $pager,
      new Route('get_items', array('limit' => $limit, 'page' => $page))
    );

    $view = $this->view($data, 200)
      ->setTemplate("AppBundle:Item:getItems.html.twig")
      ->setTemplateVar('items')
    ;
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
      ->setTemplate("AppBundle:Item:getItem.html.twig")
      ->setTemplateVar('item')
    ;

    return $this->handleView($view);
  }
}
