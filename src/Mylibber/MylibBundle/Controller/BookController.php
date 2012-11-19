<?php
//src/Mylibber/MylibBundle/Controller/BookController
namespace Mylibber\MylibBundle\Controller;
use Mylibber\MylibBundle\Entity\Book;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Mylibber\MylibBundle\Entity\Enquiry;
use Mylibber\MylibBundle\Form\EnquiryType;
/**
* BookController
*/
class BookController extends Controller
{
	public function updateAction()
	{
		$em=$this->getDoctrine()->getEntityManager();
		$book=$em->getRepository('MylibberMylibBundle:Book')->find($id);

		if (!$book) {
			throw $this->createNotFoundException("Unable to find Book Post(request)");
			}

		$book->setBookBorr('1');
		$em->flush();

		return $this->redirect($this->generateUrl('homepage'));	
	}
	
	public function showAction()
	{
		$books = $this->getDoctrine()
				->getRepository('MylibberMylibBundle:Book')
				->findAll();

		if (!$books) {
			throw $this->createNotFoundException('No product found for id ');
		}
		return $this->render('MylibberMylibBundle:Default:index.html.twig', array(
			'books'  => $books,
			'categories' => $categories,
			));
	}

	public function searchAction()
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

		return $this->render('MylibberMylibBundle:Book:search.html.twig',
			array('form'=>$form->createView()
			));
	}

	public function showbookAction()
	{
		$books = $this->getDoctrine()
				->getRepository('MylibberMylibBundle:Book')
				->findAll();
		if (!$books) {
			throw $this->createNotFoundException('No product found for id ');
		}
		return $this->render('MylibberMylibBundle:Book:list.html.twig', array(
			'books'  => $books,
			));
	}

	public function detailAction($id)
	{
		$books = $this->getDoctrine()
				->getRepository('MylibberMylibBundle:Book')
				->find($id);
		if (!$books) {
			throw $this->createNotFoundException('No product found for id ');
		}
		return $this->render('MylibberMylibBundle:Book:detail.html.twig', array(
			'book'  => $books,
			));
	}

	public function bookSearchAction()
    {
    	$condition = trim($_GET['strText']);
    	$type = $_GET['SearchType'];
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('MylibberMylibBundle:Book');
        if ($type == 'title') {
        	$books= $repository->findBy(array('bookName' => $condition));
        }else{
        	$books = $repository->findBy(array('bookIsbn' => $condition));
        }
        
        if (!$books) {
            throw $this->createNotFoundException('No Books found for id ');
        }

        return $this->render('MylibberMylibBundle:Book:list.html.twig', array(
            'books'  => $books,
            ));
    }
    
    public function showByCategoryAction($category)
    {
    	$em = $this->getDoctrine()->getEntityManager();
    	$repository = $em->getRepository('MylibberMylibBundle:Book');
    	$books = $repository->findBy(array('categoryName' => $category));
    	
    	if(!$books){
    		throw $this->createNotFoundException('No books found for category');
    	}
    	return $this->render('MylibberMylibBundle:Book:list.html.twig',array(
    			'books' => $books,
    			));
    }
}
?>