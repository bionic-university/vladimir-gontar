<?php

namespace BionicUniversity\StudentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cafedra
 */
class Cafedra
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $roomNumber;

    private $facultety;

    private $students;

    /**
     * @return mixed
     */
    public function getStudents()
    {
        return $this->students;
    }


    /**
     * @return mixed
     */
    public function getFacultety()
    {
        return $this->facultety;
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
     * Set roomNumber
     *
     * @param integer $roomNumber
     * @return Cafedra
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    /**
     * Get roomNumber
     *
     * @return integer 
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }
    /**
     * @var \BionicUniversity\StudentBundle\Entity\Faculty
     */
    private $cafedra;


    /**
     * Set cafedra
     *
     * @param \BionicUniversity\StudentBundle\Entity\Faculty $cafedra
     * @return Cafedra
     */
    public function setCafedra(\BionicUniversity\StudentBundle\Entity\Faculty $cafedra = null)
    {
        $this->cafedra = $cafedra;

        return $this;
    }

    /**
     * Get cafedra
     *
     * @return \BionicUniversity\StudentBundle\Entity\Faculty 
     */
    public function getCafedra()
    {
        return $this->cafedra;
    }
}
