<?php

namespace BionicUniversity\Bundle\ProjectBundle\Entity;

use BionicUniversity\Bundle\BlogBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

/**
 * Project
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Project
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="budget", type="integer")
     */
    private $budget;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="BionicUniversity\Bundle\ProjectBundle\Entity\User", inversedBy="projects")
     */
    private $user;

    /**
     * @var Status
     * @ORM\ManyToOne(targetEntity="BionicUniversity\Bundle\ProjectBundle\Entity\Status", inversedBy="projects")
     */
    private $status;

    /**
     * @param \BionicUniversity\Bundle\ProjectBundle\Entity\Status $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return \BionicUniversity\Bundle\ProjectBundle\Entity\Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
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
     * @return Project
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
     * Set budget
     *
     * @param integer $budget
     * @return Project
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return integer 
     */
    public function getBudget()
    {
        return $this->budget;
    }
}
