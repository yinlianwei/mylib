<?php

namespace Mylibber\MylibBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mylibber\MylibBundle\Entity\Borr
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Borr
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
     * @var string $bookIsbn
     *
     * @ORM\Column(name="bookIsbn", type="string", length=255)
     */
    private $bookIsbn;

    /**
     * @var string $uBookId
     *
     * @ORM\Column(name="uBookId", type="string", length=255)
     */
    private $uBookId;

    /**
     * @var \DateTime $borrDate
     *
     * @ORM\Column(name="borrDate", type="string", length=255)
     */
    private $borrDate;

    /**
     * @var \DateTime $givebackDate
     *
     * @ORM\Column(name="givebackDate", type="string", length=255)
     */
    private $givebackDate;

    /**
     * @var string $uName
     *
     * @ORM\Column(name="uName", type="string", length=255)
     */
    private $uName;



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
     * Set bookIsbn
     *
     * @param string $bookIsbn
     * @return Borr
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
     * Set uBookId
     *
     * @param string $uBookId
     * @return Borr
     */
    public function setUBookId($uBookId)
    {
        $this->uBookId = $uBookId;
    
        return $this;
    }

    /**
     * Get uBookId
     *
     * @return string 
     */
    public function getUBookId()
    {
        return $this->uBookId;
    }

    /**
     * Set borrDate
     *
     * @param \DateTime $borrDate
     * @return Borr
     */
    public function setBorrDate($borrDate)
    {
        $this->borrDate = $borrDate;
    
        return $this;
    }

    /**
     * Get borrDate
     *
     * @return \DateTime 
     */
    public function getBorrDate()
    {
        return $this->borrDate;
    }


    /**
     * Set givebackDate
     *
     * @param \DateTime $givebackDate
     * @return Borr
     */
    public function setGivebackDate($givebackDate)
    {
        $this->givebackDate = $givebackDate;
    
        return $this;
    }

    /**
     * Get givebackDate
     *
     * @return \DateTime 
     */
    public function getGivebackDate()
    {
        return $this->givebackDate;
    }


    /**
     * Set bookName
     *
     * @param string $bookName
     * @return Borr
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
     * Set uName
     *
     * @param string $uName
     * @return Borr
     */
    public function setUName($uName)
    {
        $this->uName = $uName;
    
        return $this;
    }

    /**
     * Get uName
     *
     * @return string 
     */
    public function getUName()
    {
        return $this->uName;
    }
}