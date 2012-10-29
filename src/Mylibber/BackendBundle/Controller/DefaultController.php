<?php

namespace Mylibber\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MylibberBackendBundle:Default:index.html.twig');
    }

     public function helloAction($name)
    {
        return $this->render('MylibberBackendBundle:Default:index.html.twig', array('name' => $name));
    }
}
