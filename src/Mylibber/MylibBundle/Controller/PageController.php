<?php
namespace Mylibber\MylibBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mylibber\MylibBundle\Entity\Enquiry;
use Mylibber\MylibBundle\Form\EnquiryType;
/**
* 
*/
class PageController extends Controller
{
	
	public function indexAction()
	{
		return $this->render( 'MylibberMylibBundle:Page:index.html.twig');

	}

	public function aboutAction()
	{
		return $this->render('MylibberMylibBundle:Page:about.html.twig');
	}

	public function contactAction()
	{
		$enquiry = new Enquiry();
		$form = $this->createForm(new EnquiryType(), $enquiry);

		$request = $this->getRequest();

		if ($request->getMethod() == 'POST') {
			$form->bindRequest($request);
			if ($form->isValid) {
				$message  =  \Swift_Message :: newInstance () 
		            -> setSubject ( 'Contact enquiry from symblog' ) 
		            -> setFrom ( 'enquiries@symblog.co.uk' ) 
		            -> setTo ( 'email@email.com' ) 
		            -> setBody ( $this -> renderView ( 'MylibberMylibBundle:Page:contactEmail.txt.twig' ,  array ( 'enquiry'  =>  $enquiry ))); 
		        $this -> get ( 'mailer' ) -> send ( $message );

		        $this -> get ( 'session' ) -> setFlash ( 'Mylibber-notice' ,  'Your contact enquiry was successfully sent. Thank you!' );
				return $this->redirect($this->generateUrl('MyliberMylibBundle_contact'));

			}
		}
		return $this->render('MylibberMylibBundle:Page:contact.html.twig', array('form'=>$form->createView()
			));
	}

}

?>