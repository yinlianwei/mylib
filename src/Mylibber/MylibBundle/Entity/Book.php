<?php
namespace Mylibber\MylibBundle\Entity;
use Doctrine\ORM\Mapping as ORM; 
/*
*@ORM\Entity
*@ORM\Table(name="book")
*/
class Book
{
	/** 
	 * @ORM\Entity 
	 * @author JiaoChangyun 
	 * 
	 */  
	
	/** 
     * @ORM\Id 
     * @ORM\Column(type="integer") 
     * @ORM\GeneratedValue (strategy="AUTO") 
     */ 
	protected $bookid;

	/** 
     * @ORM\Column(type="string") 
     */ 
	protected $bookname;

	/** 
     * @ORM\Column(type="string") 
     */ 
	protected $booktype;

	/** 
     * @ORM\Column(type="string") 
     */ 
	protected $bookauthor;

	/** 
     * @ORM\Column(type="string") 
     */ 
	protected $bookprice;

	/** 
     * @ORM\Column(type="string") 
     */ 
	protected $bookpic;

 	/** 
     * @ORM\Column(type="text") 
     */ 
	protected $bookcontent;

	/** 
     * @ORM\Column(type="string") 
     */ 
	protected $bookisbn;

	/** 
     * @ORM\Column(type="text") 
     */ 
	protected $bookborrhis;
}
?>