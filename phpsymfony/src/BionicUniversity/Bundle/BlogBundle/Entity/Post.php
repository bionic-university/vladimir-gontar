<?php

namespace BionicUniversity\Bundle\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Post
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
     * @var string
     *
     * @ORM\Column(name="text", type="text")
     */
    private $text;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="BionicUniversity\Bundle\BlogBundle\Entity\Comment", mappedBy="post")
     */
    private $comments;

    /**
     * @var Category
     * @ORM\ManyToOne(targetEntity="BionicUniversity\Bundle\BlogBundle\Entity\Category", inversedBy="posts")
     */
    private $category;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="BionicUniversity\Bundle\BlogBundle\Entity\User", inversedBy="posts")
     */
    private $user;

    function __construct()
    {
        $this->comments = new ArrayCollection();
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
     * @return Post
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
     * Set text
     *
     * @param string $text
     * @return Post
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param \BionicUniversity\Bundle\BlogBundle\Entity\Category $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return \BionicUniversity\Bundle\BlogBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param \BionicUniversity\Bundle\BlogBundle\Entity\User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return \BionicUniversity\Bundle\BlogBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }


}
