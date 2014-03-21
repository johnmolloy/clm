<?php

namespace CLM\MfrBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Model
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="CLM\MfrBundle\Entity\ModelRepository")
 */
class Model
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
     * @ORM\Column(name="name", type="string", length=40)
     */
    private $name;

    /**
	 * @ORM\ManyToOne(targetEntity="Manufacturer")
     */
    private $mfrID;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="picturePath", type="string", length=20)
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
     * @return Model
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
     * Set description
     *
     * @param string $description
     * @return Model
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
     * @return Model
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
     * Set mfrID
     *
     * @param \CLM\MfrBundle\Entity\Manufacturer $mfrID
     * @return Model
     */
    public function setMfrID(\CLM\MfrBundle\Entity\Manufacturer $mfrID = null)
    {
        $this->mfrID = $mfrID;

        return $this;
    }

    /**
     * Get mfrID
     *
     * @return \CLM\MfrBundle\Entity\Manufacturer 
     */
    public function getMfrID()
    {
        return $this->mfrID;
    }
}
