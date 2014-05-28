<?php

namespace BionicUniversity\StudentBundle\Entity;


/**
 * University
 */
class University
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $fullName;

    /**
     * @var string
     */
    private $shortName;

    /**
     * @var integer
     */
    private $accreditationLevel;

    /**
     * @var \DateTime
     */
    private $yearOfFundation;


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
     * Set fullName
     *
     * @param string $fullName
     * @return University
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set shortName
     *
     * @param string $shortName
     * @return University
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;

        return $this;
    }

    /**
     * Get shortName
     *
     * @return string 
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set accreditationLevel
     *
     * @param integer $accreditationLevel
     * @return University
     */
    public function setaccreditationLevel($accreditationLevel)
    {
        $this->accreditationLevel = $accreditationLevel;

        return $this;
    }

    /**
     * Get accreditationLevel
     *
     * @return integer 
     */
    public function getaccreditationLevel()
    {
        return $this->accreditationLevel;
    }

    /**
     * Set yearOfFundation
     *
     * @param \DateTime $yearOfFundation
     * @return University
     */
    public function setYearOfFundation($yearOfFundation)
    {
        $this->yearOfFundation = $yearOfFundation;

        return $this;
    }

    /**
     * Get yearOfFundation
     *
     * @return \DateTime 
     */
    public function getYearOfFundation()
    {
        return $this->yearOfFundation;
    }
}
