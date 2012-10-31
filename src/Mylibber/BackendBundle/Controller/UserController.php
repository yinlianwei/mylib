<?php

namespace Mylibber\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mylibber\MylibBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
* 
*/
class UserController extends Controller
{
	public function addUserAction()
	{
		$user = new User();
		$form = $this->createFormBuilder($user)
					->add('uName')
					->add('uPwd')
					->add('uPwd')
					->add('uState')
					->add('uBookId')
					->getForm();

		$users = $this->getDoctrine()
						->getRepository('MylibberMylibBundle:User')
						->findAll();
		
		return $this->render('MylibberBackendBundle:User:addUser.html.twig',
           			   array('form'=>$form->createView(),
                    		'users' => $users,
            ));
	}

	public function addUserNewAction()
	{
		$user = new User();
		$form = $this->createFormBuilder($user)
					->add('uName')
					->add('uPwd')
					->add('uPwd')
					->add('uState')
					->add('uBookId')
					->getForm();
	
		$request = $this->getRequest();

        if ($request->getMethod() == "POST") {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($user);
                $em->flush();
            }
        }
        return $this->redirect($this->generateUrl('mylibber_backend_addUser'));
	}

	public function deleteUserAction($id)
	{
		$em = $this->getDoctrine()->getEntityManager();
    	$user = $em->getRepository('MylibberMylibBundle:User')->find($id);

    	if (!$user) {
        	throw $this->createNotFoundException('No User found for id '.$id);
    	}

    	$em->remove($user);
		$em->flush();

		return $this->redirect($this->generateUrl('mylibber_backend_addUser'));
    }

    public function updateUserAction($id)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$user = $em->getRepository('MylibberMylibBundle:User')->find($id);
		$form = $this->createFormBuilder($user)
					->add('uName')
					->add('uPwd')
					->add('uPwd')
					->add('uState')
					->add('uBookId')
					->getForm();

		$users = $this->getDoctrine()
						->getRepository('MylibberMylibBundle:User')
						->findAll();
		$em->remove($user);
		$em->flush();
		return $this->render('MylibberBackendBundle:User:addUser.html.twig',
            			array('form'=>$form->createView(),
                    		'users' => $users,
            ));
    }
}
?>