<?php

namespace CLM\MfrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deal
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CLM\MfrBundle\Entity\DealRepository")
 */
class Deal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=60)
     */
    private $name;

    /**
	 * @ORM\ManyToOne(targetEntity="Model")
     */
    private $modelID;
	
    /**
	 * @ORM\ManyToOne(targetEntity="Broker")
     */
    private $brokerID;
	
    /**
     * @var string
     *
     * @ORM\Column(name="mfrName", type="string", length=60)
     */
    private $mfrName;
	
    /**
     * @var string
     *
     * @ORM\Column(name="modelName", type="string", length=60)
     */
    private $modelName;

    /**
     * @var string
     *
     * @ORM\Column(name="profile", type="string", length=5)
     */
    private $profile;
	
    /**
     * @var integer
     *
     * @ORM\Column(name="initialRental", type="integer")
     */
    private $initialRental;

    /**
     * @var integer
     *
     * @ORM\Column(name="contractLength", type="integer")
     */
    private $contractLength;

    /**
     * @var integer
     *
     * @ORM\Column(name="mileage", type="integer")
     */
    private $mileage;

    /**
     * @var integer
     *
     * @ORM\Column(name="maintenance", type="integer")
     */
    private $maintenance;

    /**
     * @var integer
     *
     * @ORM\Column(name="personal", type="integer")
     */
    private $personal;	

    /**
     * @var integer
     *
     * @ORM\Column(name="leadTime", type="integer")
     */
    private $leadTime;

    /**
     * @var decimal
     *
     * @ORM\Column(name="dealPrice", type="decimal", scale=2)
     */
    private $dealPrice;

    /**
     * @var integer
     *
     * @ORM\Column(name="dealURL", type="string", length=200)
     */
    private $dealURL;

    /**
     * @var integer
     *
     * @ORM\Column(name="views", type="integer")
     */
    private $views;
	
    /**
     * @var datetime
     *
     * @ORM\Column(name="dateAdded", type="datetime")
     */
    private $dateAdded;
	
    /**
     * @var boolean
     *
     * @ORM\Column(name="persist", type="boolean")
     */
    private $persist;
	
    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="picturePath", type="string", length=200)
     */
    private $picturePath;

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
     * Set name
     *
     * @param string $name
     * @return Deal
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set mfrName
     *
     * @param string $mfrName
     * @return Deal
     */
    public function setMfrName($mfrName)
    {
        $this->mfrName = $mfrName;

        return $this;
    }

    /**
     * Get mfrName
     *
     * @return string 
     */
    public function getMfrName()
    {
        return $this->mfrName;
    }

    /**
     * Set modelName
     *
     * @param string $modelName
     * @return Deal
     */
    public function setModelName($modelName)
    {
        $this->modelName = $modelName;

        return $this;
    }

    /**
     * Get modelName
     *
     * @return string 
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * Set profile
     *
     * @param string $profile
     * @return Deal
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return string 
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Set initialRental
     *
     * @param integer $initialRental
     * @return Deal
     */
    public function setInitialRental($initialRental)
    {
        $this->initialRental = $initialRental;

        return $this;
    }

    /**
     * Get initialRental
     *
     * @return integer 
     */
    public function getInitialRental()
    {
        return $this->initialRental;
    }

    /**
     * Set contractLength
     *
     * @param integer $contractLength
     * @return Deal
     */
    public function setContractLength($contractLength)
    {
        $this->contractLength = $contractLength;

        return $this;
    }

    /**
     * Get contractLength
     *
     * @return integer 
     */
    public function getContractLength()
    {
        return $this->contractLength;
    }

    /**
     * Set mileage
     *
     * @param integer $mileage
     * @return Deal
     */
    public function setMileage($mileage)
    {
        $this->mileage = $mileage;

        return $this;
    }

    /**
     * Get mileage
     *
     * @return integer 
     */
    public function getMileage()
    {
        return $this->mileage;
    }

    /**
     * Set maintenance
     *
     * @param integer $maintenance
     * @return Deal
     */
    public function setMaintenance($maintenance)
    {
        $this->maintenance = $maintenance;

        return $this;
    }

    /**
     * Get maintenance
     *
     * @return integer 
     */
    public function getMaintenance()
    {
        return $this->maintenance;
    }

    /**
     * Set personal
     *
     * @param integer $personal
     * @return Deal
     */
    public function setPersonal($personal)
    {
        $this->personal = $personal;

        return $this;
    }

    /**
     * Get personal
     *
     * @return integer 
     */
    public function getPersonal()
    {
        return $this->personal;
    }

    /**
     * Set leadTime
     *
     * @param integer $leadTime
     * @return Deal
     */
    public function setLeadTime($leadTime)
    {
        $this->leadTime = $leadTime;

        return $this;
    }

    /**
     * Get leadTime
     *
     * @return integer 
     */
    public function getLeadTime()
    {
        return $this->leadTime;
    }

    /**
     * Set dealPrice
     *
     * @param string $dealPrice
     * @return Deal
     */
    public function setDealPrice($dealPrice)
    {
        $this->dealPrice = $dealPrice;

        return $this;
    }

    /**
     * Get dealPrice
     *
     * @return string 
     */
    public function getDealPrice()
    {
        return $this->dealPrice;
    }

    /**
     * Set dealURL
     *
     * @param string $dealURL
     * @return Deal
     */
    public function setDealURL($dealURL)
    {
        $this->dealURL = $dealURL;

        return $this;
    }

    /**
     * Get dealURL
     *
     * @return string 
     */
    public function getDealURL()
    {
        return $this->dealURL;
    }

    /**
     * Set views
     *
     * @param integer $views
     * @return Deal
     */
    public function setViews($views)
    {
        $this->views = $views;

        return $this;
    }

    /**
     * Get views
     *
     * @return integer 
     */
    public function getViews()
    {
        return $this->views;
    }

    /**
     * Set dateAdded
     *
     * @param \DateTime $dateAdded
     * @return Deal
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return \DateTime 
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set persist
     *
     * @param boolean $persist
     * @return Deal
     */
    public function setPersist($persist)
    {
        $this->persist = $persist;

        return $this;
    }

    /**
     * Get persist
     *
     * @return boolean 
     */
    public function getPersist()
    {
        return $this->persist;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Deal
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set picturePath
     *
     * @param string $picturePath
     * @return Deal
     */
    public function setPicturePath($picturePath)
    {
        $this->picturePath = $picturePath;

        return $this;
    }

    /**
     * Get picturePath
     *
     * @return string 
     */
    public function getPicturePath()
    {
        return $this->picturePath;
    }

    /**
     * Set modelID
     *
     * @param \CLM\MfrBundle\Entity\Model $modelID
     * @return Deal
     */
    public function setModelID(\CLM\MfrBundle\Entity\Model $modelID = null)
    {
        $this->modelID = $modelID;

        return $this;
    }

    /**
     * Get modelID
     *
     * @return \CLM\MfrBundle\Entity\Model 
     */
    public function getModelID()
    {
        return $this->modelID;
    }

    /**
     * Set brokerID
     *
     * @param \CLM\MfrBundle\Entity\Broker $brokerID
     * @return Deal
     */
    public function setBrokerID(\CLM\MfrBundle\Entity\Broker $brokerID = null)
    {
        $this->brokerID = $brokerID;

        return $this;
    }

    /**
     * Get brokerID
     *
     * @return \CLM\MfrBundle\Entity\Broker 
     */
    public function getBrokerID()
    {
        return $this->brokerID;
    }
}
