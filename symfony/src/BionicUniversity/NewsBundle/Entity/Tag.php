<?php

namespace BionicUniversity\NewsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 */
class Tag
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $count;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tas;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }

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
     * @return Tag
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
     * @return Tag
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
     * Set count
     *
     * @param integer $count
     * @return Tag
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer 
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Add tas
     *
     * @param \BionicUniversity\NewsBundle\Entity\TagArticle $tas
     * @return Tag
     */
    public function addTa(\BionicUniversity\NewsBundle\Entity\TagArticle $tas)
    {
        $this->tas[] = $tas;

        return $this;
    }

    /**
     * Remove tas
     *
     * @param \BionicUniversity\NewsBundle\Entity\TagArticle $tas
     */
    public function removeTa(\BionicUniversity\NewsBundle\Entity\TagArticle $tas)
    {
        $this->tas->removeElement($tas);
    }

    /**
     * Get tas
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTas()
    {
        return $this->tas;
    }
}
