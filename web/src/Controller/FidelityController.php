<?php

namespace App\Controller;

use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\FOSRestController;
use App\Entity\Fidelity;

/**
 * Class FidelityController
 *
 * @package App\Controller
 *
 */
class FidelityController extends FOSRestController implements ClassResourceInterface
{
    
    /**
     * @param $id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAction($id)
    {
        $data = $this->getDoctrine()
          ->getRepository(Fidelity::class)
          ->find($id);
        $view = $this->view($data, 200)
          ->setTemplate("App:Fidelity:getFidelity.html.twig")
          ->setTemplateVar('fidelity');
    
        return $this->handleView($view);
    }

}
