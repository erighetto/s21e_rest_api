<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\FOSRestController;
use AppBundle\Entity\Item;

/**
 * Class ItemController
 *
 * @package AppBundle\Controller
 */
class ItemController extends FOSRestController implements ClassResourceInterface
{

  /**
   * @return \Symfony\Component\HttpFoundation\Response
   */
  public function cgetAction()
  {
    $data = $this->getDoctrine()
      ->getRepository(Item::class)
      ->findAll();
        $view = $this->view($data, 200)
          ->setTemplate("AppBundle:Items:getItems.html.twig")
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
      ->setTemplate("AppBundle:Items:getItem.html.twig")
      ->setTemplateVar('item')
    ;

    return $this->handleView($view);
  }
}
