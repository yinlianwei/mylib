<?php
namespace Mylibber\BackendBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mylibber\MylibBundle\Entity\Book;
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

	public function borrAction()
	{	
		$borrs = $this->getDoctrine()
				->getRepository('MylibberMylibBundle:Book')
				->findAll();
		if (!$borrs) {
			throw $this->createNotFoundException('No borr book found for id ');
		}
		return $this->render('MylibberBackendBundle:Book:borr.html.twig', array(
			'borrs'  => $borrs,
			));
	}

	public function histAction()
	{
		return $this->render('MylibberBackendBundle:Book:hist.html.twig');
	}



	public function configAction()
	{
		return $this->render('MylibberBackendBundle:Book:config.html.twig');
	}
}


?>