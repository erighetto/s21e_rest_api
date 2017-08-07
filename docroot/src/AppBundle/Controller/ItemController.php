<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\FOSRestController;

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
    $data = ['item1', 'item2'];
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
    $data = ['item1'];
    $view = $this->view($data, 200)
      ->setTemplate("AppBundle:Items:getItem.html.twig")
      ->setTemplateVar('item')
    ;

    return $this->handleView($view);
  }
}
