<?php
namespace Mylibber\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Mylibber\MylibBundle\Entity\Book;
use Mylibber\MylibBundle\Entity\Catrgory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Mylibber\MylibBundle\Form\EnquiryType;
use Mylibber\MylibBundle\Entity\Enquiry;
class getFromDoubanController extends Controller
{
	public function getBookInfoAction()
	{
		$bookIsbn=trim($_POST['bookIsbn']);
		$url = 'http://api.douban.com/book/subject/isbn/'.$bookIsbn;//对应的API地址。
		$xml =  simplexml_load_file($url); //解析XML文件形式的返回结果。
		$xml = (array)$xml;
		//print_r($xml);
		$arrayAuthor=(array)($xml['author']);
		$objPic=(array)($xml['link']);
		$arrayPic = ((array)$objPic[2]);
		
		    /* //用来获取书籍的图片
		    foreach ($xml->children() as $item){
		        if($item[@rel] == 'image'){
		        	$bookPic = $item[@href];
		        } 
		    }
		//调用children函数获取db命名空间下的节点数组。
		$db_xml = $xml->children('http://www.douban.com/xmlns/');
		//var_dump($db_xml); //db命名空间只包含attribute节点和tag节点。
		foreach($db_xml->attribute as $obj){//遍历所有<db:attribute />节点。
			$attrname = $obj->attributes();//调用attributes()函数获取内部属性数组。
			foreach($attrname as $key=>$value){//遍历当前节点的所有内部属性。
				echo $key.'----'; 
				print_r($value);
			}	
		}
		

		echo '<hr>';
		print_r($db_xml->attribute);
		$bookInfo[] = $db_xml->attributes();
		echo "<hr>";
		print_r($bookInfo);*/
		//echo '----'. $xml['author'].'----';
		$categories = $this->getDoctrine()
		->getRepository('MylibberMylibBundle:Category')
		->findAll();
		
		foreach ($categories as $key => $value) {
			$category[$categories[$key]->getCategoryName()] = $categories[$key]->getCategoryName();
		}
		
		$book = new Book();
		$form = $this->createFormBuilder($book)
		->add('bookIsbn',null, array('label' => 'ISBN','data'=>$bookIsbn))
		->add('bookName',null, array('label' => '书籍名称','data'=>$xml['title']))
		->add('categoryName', 'choice', array('label' => '书籍分类','choices' => $category))
		->add('bookAuthor',null, array('label' => '作者','data'=>$arrayAuthor['name']))
		->add('bookPrice',null, array('label' => '价格'))
		->add('bookPic', null, array('label' => '封面','data'=>$arrayPic['@attributes']['href']))
		->add('bookContent',null, array('label' => '简介','data'=>$xml['summary']))
		->add('bookOwner', null, array('label'=>'持有者'))
		->add('bookBorr','choice', array('label' => '是否可借','choices' => array('1' => '可借', '2' => '不可借')))
		->getForm();
		
		return $this->render('MylibberBackendBundle:Book:add.html.twig',
				array('form'=>$form->createView(),
						'categories' => $categories
				));
	}
}
?>