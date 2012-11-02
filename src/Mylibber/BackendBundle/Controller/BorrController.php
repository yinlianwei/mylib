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
		$borr = new Borr();
		$form = $this->createFormBuilder($borr)
					->add('bookName',null, array('label' => '书籍名称'))
					->add('bookIsbn')
					->add('uName')
					->add('borrDate')
					->add('uBookId')
					->getForm();
		return $this->render('MylibberBackendBundle:Book:borrBook.html.twig',
            			array('form'=>$form->createView(),
            				'book' => $book,
                    		'borr' => $borr,
            ));
	}
	public function newBorrBookAction(Request $request)
	{
		$borr = new Borr();
		$form = $this->createFormBuilder($borr)
					->add('bookName')
					->add('bookIsbn')
					->add('uName')
					->add('borrDate')
					->add('uBookId')
					->getForm();
		$request = $this->getRequest();

		if ($request->getMethod() == "POST") {
			$form->bindRequest($request);

			if ($form->isValid()) {
				$em = $this->getDoctrine()->getEntityManager();
	            $em->persist($borr);
	            $em->flush();
			}
		}
		return $this->redirect($this->generateUrl('mylibber_backend_borrbook'));
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