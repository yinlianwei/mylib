<?php
namespace Mylibber\BackendBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mylibber\MylibBundle\Entity\Book;
use Mylibber\MylibBundle\Entity\Borr;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Mylibber\MylibBundle\Entity\Enquiry;
use Mylibber\MylibBundle\Form\EnquiryType;
/**
* bookcontroller
*/
class BookController extends Controller
{
	
	public function addAction()
	{
		$book = new Book();
		$form = $this->createFormBuilder($book)
			->add('bookName')
			->add('categoryName')
			->add('bookAuthor')
			->add('bookPrice')
			->add('bookPic')
			->add('bookContent')
			->add('bookIsbn')
			->add('bookBorr')
			->getForm();	

		return $this->render('MylibberBackendBundle:Book:add.html.twig',
			array('form'=>$form->createView()
			));
	}


	public function addnewAction(Request $request)
	{
		$book = new Book();

		$form = $this->createFormBuilder($book)
			->add('bookName')
			->add('categoryName')
			->add('bookAuthor')
			->add('bookPrice')
			->add('bookPic')
			->add('bookContent')
			->add('bookIsbn')
			->add('bookBorr')
			->getForm();	
		//$form = $this->createForm()

		$request = $this->getRequest();

		if ($request->getMethod() == "POST") {
			$form->bindRequest($request);

			if ($form->isValid()) {
				$em = $this->getDoctrine()->getEntityManager();
	            $em->persist($book);
	            $em->flush();
			}
		}
		return $this->redirect($this->generateUrl('mylibber_backend_addnew'));
	}



	public function borrActionNew()
	{

	}

	public function histAction()
	{
		return $this->render('MylibberBackendBundle:Book:hist.html.twig');
	}



	public function configAction()
	{
		return $this->render('MylibberBackendBundle:Book:config.html.twig');
	}

	public function showhistAction()
	{
		$em = $this->getDoctrine()->getEntityManager();
	    $borr = $em->getRepository('AcmeStoreBundle:Borr')->find($id);

	    if (!$borr) {
	        throw $this->createNotFoundException('No product found for id ');
	    }
		return $this->render('MylibberBackendBundle:Book:showhist.html.twig',
			array('form'=>$form->createView()
			));
	}
}


?>