<?php

namespace CLM\MfrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Manufacturer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CLM\MfrBundle\Entity\ManufacturerRepository")
 */
class Manufacturer
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
     * @ORM\Column(name="mfrName", type="string", length=30)
     */
    private $mfrName;

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
     * @ORM\Column(name="contactNumber", type="string", length=15)
     */
    private $contactNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="recoveryTelNumber", type="string", length=15)
     */
    private $recoveryTelNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="logoPath", type="string", length=15)
     */
    private $logoPath;

    /**
     * @var boolean
     *
     * @ORM\Column(name="mainMenuInclude", type="boolean")
     */
    private $mainMenuInclude;


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
     * Set mfrName
     *
     * @param string $mfrName
     * @return Manufacturer
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
     * Set description
     *
     * @param string $description
     * @return Manufacturer
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
     * @return Manufacturer
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
     * Set contactNumber
     *
     * @param string $contactNumber
     * @return Manufacturer
     */
    public function setContactNumber($contactNumber)
    {
        $this->contactNumber = $contactNumber;

        return $this;
    }

    /**
     * Get contactNumber
     *
     * @return string 
     */
    public function getContactNumber()
    {
        return $this->contactNumber;
    }

    /**
     * Set recoveryTelNumber
     *
     * @param string $recoveryTelNumber
     * @return Manufacturer
     */
    public function setRecoveryTelNumber($recoveryTelNumber)
    {
        $this->recoveryTelNumber = $recoveryTelNumber;

        return $this;
    }

    /**
     * Get recoveryTelNumber
     *
     * @return string 
     */
    public function getRecoveryTelNumber()
    {
        return $this->recoveryTelNumber;
    }

    /**
     * Set logoPath
     *
     * @param string $logoPath
     * @return Manufacturer
     */
    public function setLogoPath($logoPath)
    {
        $this->logoPath = $logoPath;

        return $this;
    }

    /**
     * Get logoPath
     *
     * @return string 
     */
    public function getLogoPath()
    {
        return $this->logoPath;
    }

    /**
     * Set mainMenuInclude
     *
     * @param boolean $mainMenuInclude
     * @return Manufacturer
     */
    public function setMainMenuInclude($mainMenuInclude)
    {
        $this->mainMenuInclude = $mainMenuInclude;

        return $this;
    }

    /**
     * Get mainMenuInclude
     *
     * @return boolean 
     */
    public function getMainMenuInclude()
    {
        return $this->mainMenuInclude;
    }
}
