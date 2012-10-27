<?php

namespace Mylibber\MylibBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mylibber\MylibBundle\Entity\Book
 */
class Book
{
    /**
     * @var integer $id
     */
    private $id;

    /**
     * @var string $bookname
     */
    private $bookname;

    /**
     * @var string $booktype
     */
    private $booktype;

    /**
     * @var string $bookauthor
     */
    private $bookauthor;

    /**
     * @var integer $bookprice
     */
    private $bookprice;

    /**
     * @var string $bookcontent
     */
    private $bookcontent;

    /**
     * @var string $bookisbn
     */
    private $bookisbn;

    /**
     * @var string $bookborrhis
     */
    private $bookborrhis;


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
     * Set bookname
     *
     * @param string $bookname
     * @return Book
     */
    public function setBookname($bookname)
    {
        $this->bookname = $bookname;
    
        return $this;
    }

    /**
     * Get bookname
     *
     * @return string 
     */
    public function getBookname()
    {
        return $this->bookname;
    }

    /**
     * Set booktype
     *
     * @param string $booktype
     * @return Book
     */
    public function setBooktype($booktype)
    {
        $this->booktype = $booktype;
    
        return $this;
    }

    /**
     * Get booktype
     *
     * @return string 
     */
    public function getBooktype()
    {
        return $this->booktype;
    }

    /**
     * Set bookauthor
     *
     * @param string $bookauthor
     * @return Book
     */
    public function setBookauthor($bookauthor)
    {
        $this->bookauthor = $bookauthor;
    
        return $this;
    }

    /**
     * Get bookauthor
     *
     * @return string 
     */
    public function getBookauthor()
    {
        return $this->bookauthor;
    }

    /**
     * Set bookprice
     *
     * @param integer $bookprice
     * @return Book
     */
    public function setBookprice($bookprice)
    {
        $this->bookprice = $bookprice;
    
        return $this;
    }

    /**
     * Get bookprice
     *
     * @return integer 
     */
    public function getBookprice()
    {
        return $this->bookprice;
    }

    /**
     * Set bookcontent
     *
     * @param string $bookcontent
     * @return Book
     */
    public function setBookcontent($bookcontent)
    {
        $this->bookcontent = $bookcontent;
    
        return $this;
    }

    /**
     * Get bookcontent
     *
     * @return string 
     */
    public function getBookcontent()
    {
        return $this->bookcontent;
    }

    /**
     * Set bookisbn
     *
     * @param string $bookisbn
     * @return Book
     */
    public function setBookisbn($bookisbn)
    {
        $this->bookisbn = $bookisbn;
    
        return $this;
    }

    /**
     * Get bookisbn
     *
     * @return string 
     */
    public function getBookisbn()
    {
        return $this->bookisbn;
    }

    /**
     * Set bookborrhis
     *
     * @param string $bookborrhis
     * @return Book
     */
    public function setBookborrhis($bookborrhis)
    {
        $this->bookborrhis = $bookborrhis;
    
        return $this;
    }

    /**
     * Get bookborrhis
     *
     * @return string 
     */
    public function getBookborrhis()
    {
        return $this->bookborrhis;
    }
}
