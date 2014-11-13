<?php

namespace BionicUniversity\Bundle\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 *
 * в дужках Table() можно указать индексы и др. параметры.
 */
class User
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
     * @ORM\Column(type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(type="string", length=255, unique=true)
     *
     * Дописали unique=true
     */
    private $email;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="BionicUniversity\Bundle\BlogBundle\Entity\Comment", mappedBy="user")
     */
    private $comments;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="BionicUniversity\Bundle\BlogBundle\Entity\Post", mappedBy="user")
     */
    private $posts;


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
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
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
}
