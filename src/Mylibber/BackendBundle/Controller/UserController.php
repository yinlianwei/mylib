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
					->add('uName',null, array('label' => '用户名'))
					->add('uPwd',null, array('label' => '密码','data'=>'******', 'read_only'=>True))
					->add('uState','choice', array('label' => '是否管理员','choices' => array('2' => '不是管理员','1' => '是管理员')))
					->add('uBookId',null, array('label' => '证件号码'))
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
					->add('uState')
					->add('uBookId')
					->getForm();
	
		$request = $this->getRequest();

        if ($request->getMethod() == "POST") {
            $form->bindRequest($request);

                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($user);
                $em->flush();
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

    public function updateUserFormAction($id)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$user = $em->getRepository('MylibberMylibBundle:User')->find($id);
		$form = $this->createFormBuilder($user)
					->add('uName',null, array('label' => '用户名'))
					->add('uPwd',null, array('label' => '密码'))
					->add('uState','choice', array('label' => '是否管理员','choices' => array('2' => '不是管理员','1' => '是管理员')))
					->add('uBookId',null, array('label' => '证件号码'))
					->getForm();

	/*	$users = $this->getDoctrine()
						->getRepository('MylibberMylibBundle:User')
						->findAll();
		
		$em->flush();*/
		$em->remove($user);

		return $this->render('MylibberBackendBundle:User:updateUser.html.twig',
            			array('form'=>$form->createView(),
                    		'user' => $user,
            ));
    }

    public function updateUserAction($id)
    {
    	$user = new User();
		$form = $this->createFormBuilder($user)
					->add('uName')
					->add('uPwd')
					->add('uState')
					->add('uBookId')
					->getForm();
	
		$request = $this->getRequest();

		$delem = $this->getDoctrine()->getEntityManager();
    	$deluser = $delem->getRepository('MylibberMylibBundle:User')->find($id);

        if ($request->getMethod() == "POST") {
            $form->bindRequest($request);

            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->persist($user);
				$em->flush();

                $delem->remove($deluser);
               	$delem->flush();
            }
        }
		return $this->redirect($this->generateUrl('mylibber_backend_addUser'));
    }
}
?>