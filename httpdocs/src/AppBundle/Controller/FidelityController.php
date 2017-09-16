<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\FOSRestController;
use AppBundle\Entity\Fidelity;

/**
 * Class FidelityController
 *
 * @package AppBundle\Controller
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
          ->setTemplate("AppBundle:Fidelity:getFidelity.html.twig")
          ->setTemplateVar('fidelity');
    
        return $this->handleView($view);
    }

}
