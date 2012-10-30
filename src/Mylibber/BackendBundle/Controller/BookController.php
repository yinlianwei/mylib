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
			->getForm();	

		return $this->render('MylibberBackendBundle:Book:add.html.twig',
			array('form'=>$form->createView()
			));
	}


	public function addnewAction(Request $request)
	{
		$book = new Book;

		$form = $this->createFormBuilder($book)
			->add('bookName')
			->add('categoryName')
			->add('bookAuthor')
			->add('bookPrice')
			->add('bookPic')
			->add('bookContent')
			->add('bookIsbn')
			->getForm();	

		if ($request->getMethod() == "POST") {
			$form->bindRequest($request);

			if ($form->isValid()) {
				return $this->redirect($this->generateUrl('success'));
			}
		}

	}

	public function borrAction()
	{
		return $this->render('MylibberBackendBundle:Book:borr.html.twig');
	}
	public function retAction()
	{
		return $this->render('MylibberBackendBundle:Book:ret.html.twig');
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