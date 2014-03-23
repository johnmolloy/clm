<?php

namespace CLM\MfrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Broker
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CLM\MfrBundle\Entity\BrokerRepository")
 */
class Broker
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
     * @ORM\Column(name="brokerName", type="string", length=40)
     */
    private $brokerName;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=100)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="contactNo", type="string", length=15)
     */
    private $contactNo;

    /**
     * @var integer
     *
     * @ORM\Column(name="brokerType", type="smallint")
     */
    private $brokerType;

    /**
     * @var integer
     *
     * @ORM\Column(name="accountType", type="smallint")
     */
    private $accountType;

    /**
     * @var string
     *
     * @ORM\Column(name="pwHash", type="string", length=64)
     */
    private $pwHash;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="xmlFile", type="string", length=15)
     */
    private $xmlFile;


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
     * Set brokerName
     *
     * @param string $brokerName
     * @return Broker
     */
    public function setBrokerName($brokerName)
    {
        $this->brokerName = $brokerName;

        return $this;
    }

    /**
     * Get brokerName
     *
     * @return string 
     */
    public function getBrokerName()
    {
        return $this->brokerName;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Broker
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
     * Set website
     *
     * @param string $website
     * @return Broker
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string 
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set contactNo
     *
     * @param string $contactNo
     * @return Broker
     */
    public function setContactNo($contactNo)
    {
        $this->contactNo = $contactNo;

        return $this;
    }

    /**
     * Get contactNo
     *
     * @return string 
     */
    public function getContactNo()
    {
        return $this->contactNo;
    }

    /**
     * Set brokerType
     *
     * @param integer $brokerType
     * @return Broker
     */
    public function setBrokerType($brokerType)
    {
        $this->brokerType = $brokerType;

        return $this;
    }

    /**
     * Get brokerType
     *
     * @return integer 
     */
    public function getBrokerType()
    {
        return $this->brokerType;
    }

    /**
     * Set accountType
     *
     * @param integer $accountType
     * @return Broker
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * Get accountType
     *
     * @return integer 
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Set pwHash
     *
     * @param string $pwHash
     * @return Broker
     */
    public function setPwHash($pwHash)
    {
        $this->pwHash = $pwHash;

        return $this;
    }

    /**
     * Get pwHash
     *
     * @return string 
     */
    public function getPwHash()
    {
        return $this->pwHash;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Broker
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set xmlFile
     *
     * @param string $xmlFile
     * @return Broker
     */
    public function setXmlFile($xmlFile)
    {
        $this->xmlFile = $xmlFile;

        return $this;
    }

    /**
     * Get xmlFile
     *
     * @return string 
     */
    public function getXmlFile()
    {
        return $this->xmlFile;
    }
}
