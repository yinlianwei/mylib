<?php

namespace Mylibber\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mylibber\MylibBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
* 
*/
class CategoryController extends Controller
{
	
	public function addCategoryAction()
    {
        $category = new Category();
        $form = $this->createFormBuilder($category)
            ->add('categoryName',null, array('label' => '分类名称'))
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

    public function deleteCategoryAction($id)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$category = $em->getRepository('MylibberMylibBundle:Category')->find($id);

    	if (!$category) {
        	throw $this->createNotFoundException('No category found for id '.$id);
    	}

    	$em->remove($category);
		$em->flush();

		return $this->redirect($this->generateUrl('mylibber_backend_addCategory'));
    }
}

?>