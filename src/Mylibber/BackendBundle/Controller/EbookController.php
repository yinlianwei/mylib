<?php
namespace Mylibber\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mylibber\MylibBundle\Entity\Ebook;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Mylibber\MylibBundle\Form\EnquiryType;
use Mylibber\MylibBundle\Entity\Enquiry;


class EbookController extends Controller
{
	public function addebookformAction()
	{
		$ebook = new Ebook();
		$form = $this->createFormBuilder($ebook)
				->add('name')
				->add('file')
				->getForm();
	
	
	return $this->render('MylibberBackendBundle:Ebook:add.html.twig',
			array('form'=>$form->createView(),
					));
	}
	
	public function addebookAction()
	{
		$ebook = new Ebook();
		$form = $this->createFormBuilder($ebook)
				->add('name')
				->add('file')
				->getForm();
		
		if ($this->getRequest()->getMethod() === 'POST') {
		        $form->bindRequest($this->getRequest());
		        if ($form->isValid()) {
		            $em = $this->getDoctrine()->getEntityManager();
		
		           
		            $em->persist($ebook);
		            $em->flush();
				
			}
		}
		
		return $this->redirect($this->generateUrl('mylibber_backend_addebookform'));
	}
	
	public function showebookAction()
	{
		$ebooks = $this->getDoctrine()
				->getRepository('MylibberMylibBundle:Ebook')
				->findAll();
		if (!$ebooks) {
			throw $this->createNotFoundException('No borr ebooks found for id ');
		}
		return $this->render('MylibberBackendBundle:Ebook:manage.html.twig', array(
				'ebooks'  => $ebooks,
		));
	}
	
	public function deleteebookAction()
	{
		
	}
}
?>