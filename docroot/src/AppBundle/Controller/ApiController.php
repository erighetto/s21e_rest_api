<?php

// src/AppBundle/Controller/ApiController.php
// https://gist.github.com/diegonobre/341eb7b793fc841c0bba3f2b865b8d66

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Route;

class ApiController extends FOSRestController
{
  /**
   * @Route("/api")
   */
  public function indexAction()
  {
    $data = array("hello" => "world");
    $view = $this->view($data);
    return $this->handleView($view);
  }
}