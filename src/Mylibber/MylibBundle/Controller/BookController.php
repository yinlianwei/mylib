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

	public function createAction()
	{
		$book = new Book();
		$book->setBookName('经济学原理');
		$book->setCategoryName('economic');
		$book->setBookAuthor('[美] 曼昆 ');
		$book->setBookPrice('88.00');
		$book->setBookPic('http://img3.douban.com/mpic/s1785715.jpg');
		$book->setBookContent('此《经济学原理》的第3版把较多篇幅用于应用与政策，较少篇幅用于正规的经济理论。书中主要从供给与需求、企业行为与消费者选择理论、长期经济增长与短期经济波动以及宏观经济政策等角度深入浅出地剖析了经济学家们的世界观。');
		$book->setBookIsbn('9787111126768');
		$book->setBookBorrHis('Evenvi 2012.3.4');
		$book->setBookBorr('1');

		$em=$this->getDoctrine()->getEntityManager();
		$em->persist($book);
		$em->flush();

		return new Response('Create book id'.$book->getId());
	}

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
}
?>