<?php

namespace Mylibber\MylibBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mylibber\MylibBundle\Entity\User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User
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
     * @var string $uName
     *
     * @ORM\Column(name="uName", type="string", length=255)
     */
    private $uName;

    /**
     * @var string $uPwd
     *
     * @ORM\Column(name="uPwd", type="string", length=255)
     */
    private $uPwd;

    /**
     * @var string $uState
     *
     * @ORM\Column(name="uState", type="string", length=255)
     */
    private $uState;

    /**
     * @var string $uBookId
     *
     * @ORM\Column(name="uBookId", type="integer")
     */
    private $uBookId;


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
     * Set uName
     *
     * @param string $uName
     * @return User
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

    /**
     * Set uPwd
     *
     * @param string $uPwd
     * @return User
     */
    public function setUPwd($uPwd)
    {
        $this->uPwd = $uPwd;
    
        return $this;
    }

    /**
     * Get uPwd
     *
     * @return string 
     */
    public function getUPwd()
    {
        return $this->uPwd;
    }

    /**
     * Set uState
     *
     * @param string $uState
     * @return User
     */
    public function setUState($uState)
    {
        $this->uState = $uState;
    
        return $this;
    }

    /**
     * Get uState
     *
     * @return string 
     */
    public function getUState()
    {
        return $this->uState;
    }

    /**
     * Set uBookId
     *
     * @param string $uBookId
     * @return User
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
}