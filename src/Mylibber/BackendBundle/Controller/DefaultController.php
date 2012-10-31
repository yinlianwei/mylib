<?php

namespace Mylibber\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mylibber\MylibBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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

    public function successAction()
    {
    	return $this->render('MylibberBackendBundle:Default:success.html.twig');
    }

    public function addCategoryAction()
    {
        $category = new Category();
        $form = $this->createFormBuilder($category)
            ->add('categoryName')
            ->getForm();    
        $categories = $this->getDoctrine()
            ->getRepository('MylibberMylibBundle:Category')
            ->findAll();
        if (!$categories) {
            throw $this->createNotFoundException('No categories found for id ');
        }

        return $this->render('MylibberBackendBundle:Default:addCatrgory.html.twig',
            array('form'=>$form->createView(),
                    'categories' => $categories,
            ));
    }

    public function addCategoryNewAction()
    {
        $category = new Category();
        $form = $this->createFormBuilder($category)
                    ->add('categoryName')
                    ->getForm();    
                    
        $request = $this->getRequest();

        if ($request->getMethod() == "POST") {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($category);
                $em->flush();
            }
        }

        return $this->redirect($this->generateUrl('mylibber_backend_addCategory'));
    }
}