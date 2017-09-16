<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Controller\FOSRestController;
use AppBundle\Entity\Customer;

/**
 * Class CustomerController
 *
 * @package AppBundle\Controller
 */
class CustomerController extends FOSRestController implements ClassResourceInterface
{
    
    /**
     * @param $id
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function getAction($id)
    {
        $data = $this->getDoctrine()
          ->getRepository(Customer::class)
          ->find($id);
        $view = $this->view($data, 200)
          ->setTemplate("AppBundle:Customer:getCustomer.html.twig")
          ->setTemplateVar('customer');
    
        return $this->handleView($view);
    }

}
