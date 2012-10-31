<?php

namespace Mylibber\MylibBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mylibber\MylibBundle\Entity\Book
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Book
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $bookName
     *
     * @ORM\Column(name="bookName", type="string", length=255)
     */
    private $bookName;

    /**
     * @var string $categoryName
     *
     * @ORM\Column(name="categoryName", type="string", length=255)
     */
    private $categoryName;

    /**
     * @var string $bookAuthor
     *
     * @ORM\Column(name="bookAuthor", type="string", length=255)
     */
    private $bookAuthor;

    /**
     * @var string $bookPrice
     *
     * @ORM\Column(name="bookPrice", type="string", length=255)
     */
    private $bookPrice;

    /**
     * @var string $bookPic
     *
     * @ORM\Column(name="bookPic", type="string", length=255)
     */
    private $bookPic;

    /**
     * @var string $bookContent
     *
     * @ORM\Column(name="bookContent", type="text")
     */
    private $bookContent;

    /**
     * @var string $bookIsbn
     *
     * @ORM\Column(name="bookIsbn", type="string", length=255)
     */
    private $bookIsbn;


     /**
     * @var string $bookBorr
     *
     * @ORM\Column(name="bookBorr", type="integer")
     */
    private $bookBorr;




    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set bookName
     *
     * @param string $bookName
     * @return Book
     */
    public function setBookName($bookName)
    {
        $this->bookName = $bookName;
    
        return $this;
    }

    /**
     * Get bookName
     *
     * @return string 
     */
    public function getBookName()
    {
        return $this->bookName;
    }

    /**
     * Set categoryName
     *
     * @param string $categoryName
     * @return Book
     */
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    
        return $this;
    }

    /**
     * Get categoryName
     *
     * @return string 
     */
    public function getCategoryName()
    {
        return $this->categoryName;
    }

    /**
     * Set bookAuthor
     *
     * @param string $bookAuthor
     * @return Book
     */
    public function setBookAuthor($bookAuthor)
    {
        $this->bookAuthor = $bookAuthor;
    
        return $this;
    }

    /**
     * Get bookAuthor
     *
     * @return string 
     */
    public function getBookAuthor()
    {
        return $this->bookAuthor;
    }

    /**
     * Set bookPrice
     *
     * @param string $bookPrice
     * @return Book
     */
    public function setBookPrice($bookPrice)
    {
        $this->bookPrice = $bookPrice;
    
        return $this;
    }

    /**
     * Get bookPrice
     *
     * @return string 
     */
    public function getBookPrice()
    {
        return $this->bookPrice;
    }

    /**
     * Set bookPic
     *
     * @param string $bookPic
     * @return Book
     */
    public function setBookPic($bookPic)
    {
        $this->bookPic = $bookPic;
    
        return $this;
    }

    /**
     * Get bookPic
     *
     * @return string 
     */
    public function getBookPic()
    {
        return $this->bookPic;
    }

    /**
     * Set bookContent
     *
     * @param string $bookContent
     * @return Book
     */
    public function setBookContent($bookContent)
    {
        $this->bookContent = $bookContent;
    
        return $this;
    }

    /**
     * Get bookContent
     *
     * @return string 
     */
    public function getBookContent()
    {
        return $this->bookContent;
    }

    /**
     * Set bookIsbn
     *
     * @param string $bookIsbn
     * @return Book
     */
    public function setBookIsbn($bookIsbn)
    {
        $this->bookIsbn = $bookIsbn;
    
        return $this;
    }

    /**
     * Get bookIsbn
     *
     * @return string 
     */
    public function getBookIsbn()
    {
        return $this->bookIsbn;
    }

    /**
     * Set bookBorrHis
     *
     * @param string $bookBorrHis
     * @return Book
     */
    public function setBookBorrHis($bookBorrHis)
    {
        $this->bookBorrHis = $bookBorrHis;
    
        return $this;
    }

    /**
     * Get bookBorrHis
     *
     * @return string 
     */
    public function getBookBorrHis()
    {
        return $this->bookBorrHis;
    }

    /**
     * Set bookBorr
     *
     * @param string $bookBorr
     * @return Book
     */
    public function setBookBorr($bookBorr)
    {
        $this->bookBorr = $bookBorr;
    
        return $this;
    }

    /**
     * Get bookBorr
     *
     * @return integer 
     */
    public function getBookBorr()
    {
        return $this->bookBorr;
    }

}
