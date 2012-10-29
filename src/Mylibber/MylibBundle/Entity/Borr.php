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
     * @ORM\Column(name="borrDate", type="datetime")
     */
    private $borrDate;


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
}
