<?php
namespace Mylibber\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mylibber\MylibBundle\Entity\Book;
use Mylibber\MylibBundle\Entity\Borr;
use mylibber\MylibBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Mylibber\MylibBundle\Entity\Enquiry;
use Mylibber\MylibBundle\Form\EnquiryType;
use Mylibber\BackendBundle\Form\Type\CategoryType;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
* bookcontroller
*/
class BookController extends Controller
{
	
	public function addAction()
	{
		$categories = $this->getDoctrine()
            ->getRepository('MylibberMylibBundle:Category')
            ->findAll();

        /*foreach ($categories as $key => $value) {
        	$category[$key] = $categories[$key]->getCategoryName();
        }*/


		//GET http://api.douban.com/book/subject/isbn/{isbnID}
		$url = 'http://api.douban.com/book/subject/isbn/9787532140091';//对应的API地址。
		$xml =  simplexml_load_file($url); //解析XML文件形式的返回结果。
		$link = array();
		    //用来获取书籍的图片
		foreach ($xml->children() as $item){
		    if($item[@rel] == 'image'){
				$bookPic = $item[@href];
		    }
		}

		//echo $bookPic;


        foreach ($categories as $key => $value) {
        	$category[$categories[$key]->getCategoryName()] = $categories[$key]->getCategoryName();
        }
		$book = new Book();
		$form = $this->createFormBuilder($book)
			->add('bookIsbn',null, array('label' => 'ISBN'))
			->add('bookName',null, array('label' => '书籍名称'))
			->add('categoryName', 'choice', array('label' => '书籍分类','choices' => $category))
			->add('bookAuthor',null, array('label' => '作者'))
			->add('bookPrice',null, array('label' => '价格'))
			->add('bookPic', null, array('label' => '封面','data'=>$bookPic))
			->add('bookContent',null, array('label' => '简介'))
			->add('bookOwner', null, array('label'=>'持有者'))
			->add('bookBorr','choice', array('label' => '是否可借','choices' => array('1' => '可借', '2' => '不可借')))
			->getForm();	

		return $this->render('MylibberBackendBundle:Book:add.html.twig',
			array('form'=>$form->createView(),
				'categories' => $categories
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
			->add('bookOwner')
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
	            //echo '<div class="alert alert-error">执行成功</div>';
			}
		}

		return $this->redirect($this->generateUrl('mylibber_backend_addbook'));
	}


	public function giveBackAction($bookIsbn)
	{
		$book = new Book();
		$em=$this->getDoctrine()->getEntityManager();
		$book = $em->getRepository('MylibberMylibBundle:Book')->findOneByBookIsbn($bookIsbn);
		$book->setBookBorr('1');
		$em->flush();

		date_default_timezone_set('PRC'); 
		$em2=$this->getDoctrine()->getEntityManager();
		$borr = $em2->getRepository('MylibberMylibBundle:Borr')->findOneBy(array('bookIsbn'=>$bookIsbn,'givebackDate'=>NULL));
		$borr->setGivebackDate(date('Y-m-d G:i:s'));
		$em2->flush();

		return $this->redirect($this->generateUrl('mylibber_backend_borrbook'));
	}


	public function histAction()
	{
		return $this->render('MylibberBackendBundle:Book:hist.html.twig');
	}



	public function deleteBookAction($id)
		{
			$em = $this->getDoctrine()->getEntityManager();
	    	$book = $em->getRepository('MylibberMylibBundle:Book')->find($id);

	    	if (!$book) {
	        	throw $this->createNotFoundException('No Book found for id '.$id);
	    	}

	    	$em->remove($book);
			$em->flush();

			return $this->redirect($this->generateUrl('mylibber_backend_borrbook'));
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