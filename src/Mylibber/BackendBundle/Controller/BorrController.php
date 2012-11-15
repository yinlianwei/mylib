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
class BorrController extends Controller
{
	


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

	public function borrFormAction($id)
	{
		$em = $this->getDoctrine()->getEntityManager();
    	$book = $em->getRepository('MylibberMylibBundle:Book')->find($id);

    	//set boorr state can't borrow 
    	//$book->setBookBorr('2');
    	//$em->flush();


		$borr = new Borr();
		date_default_timezone_set('PRC'); 
		$form = $this->createFormBuilder($borr)
					->add('bookName',null, array('label' => '书籍名称','data' => $book->getBookName()))
					->add('bookIsbn',null, array('label' => 'ISBN','data' => $book->getBookIsbn()))
					->add('uName',null, array('label' => '借阅者'))
					->add('borrDate',null, array('label' => '借阅日期','data' => date('Y-m-d G:i:s')))
					->add('givebackDate',null, array('label' => '归还日期','read_only'=>'yes','data'=>''))
					->add('uBookId',null, array('label' => '证件号码'))
					->getForm();
		return $this->render('MylibberBackendBundle:Book:borrBook.html.twig',
            			array('form'=>$form->createView(),
            				'book' => $book,
                    		'borr' => $borr,
            ));
	}
	public function newBorrBookAction($id,Request $request)
	{
		$borr = new Borr();


		$em1 = $this->getDoctrine()->getEntityManager();
    	


		$form = $this->createFormBuilder($borr)
					->add('bookName')
					->add('bookIsbn')
					->add('uName')
					->add('borrDate')
					->add('givebackDate')
					->add('uBookId')
					->getForm();
		$request = $this->getRequest();
		$book = $em1->getRepository('MylibberMylibBundle:Book')->find($id);

		if ($request->getMethod() == "POST") {
			$form->bindRequest($request);

			if ($form->isValid()) {
				$em = $this->getDoctrine()->getEntityManager();
	            $em->persist($borr);

	            //set boorr state can't borrow 
    			$book->setBookBorr('2');
	            $em1->flush();

	            $em->flush();
			}
		}
		return $this->redirect($this->generateUrl('mylibber_backend_borrbook'));
	}


	public function borrSearchListAction()
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

        return $this->render('MylibberBackendBundle:Borr:searchBorrlist.html.twig', array(
            'books'  => $books,
            ));
	}

	public function isbnBorrListAction($bookIsbn)
	{
		$em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('MylibberMylibBundle:Borr');

        $borrs = $repository->findBy(array('bookIsbn' => $bookIsbn));
        if (!$borrs) {
            throw $this->createNotFoundException('No Books found for id ');
        }

        return $this->render('MylibberBackendBundle:Borr:showhist.html.twig', array(
            'borrs'  => $borrs,
            ));
	}
	public function borrListAction()
	{

		$condition = trim($_GET['strText']);
    	$type = $_GET['SearchType'];
        $em = $this->getDoctrine()->getEntityManager();
        $repository = $em->getRepository('MylibberMylibBundle:Borr');
        if ($type == 'title') {
        	$borrs= $repository->findBy(array('bookName' => $condition));
        }else{
        	$borrs = $repository->findBy(array('bookIsbn' => $condition));
        }
        
        if (!$borrs) {
            throw $this->createNotFoundException('No Books found for id ');
        }

        return $this->render('MylibberBackendBundle:Borr:showhist.html.twig', array(
            'borrs'  => $borrs,
            ));
	}
}


?>