<?php

namespace Mylibber\MylibBundle\Controller;

use Mylibber\MylibBundle\Entity\Enquiry;
use Mylibber\MylibBundle\Form\EnquiryType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	public function indexAction()
	{
		$books = $this->getDoctrine()
				->getRepository('MylibberMylibBundle:Book')
				->findAll();
		if (!$books) {
			throw $this->createNotFoundException('No product found for id ');
		}
		return $this->render('MylibberMylibBundle:Default:index.html.twig', array(
			'books'  => $books,
			));
	}
}
