<?php

namespace BionicUniversity\Bundle\BlogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Comment
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Comment
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
     * @ORM\Column(name="text", type="text")
     */
    private $text;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @var User
     * @ORM\ManyToOne(targetEntity="BionicUniversity\Bundle\BlogBundle\Entity\User", inversedBy="comments")
     */
    private $user;

    /**
     * @var Post
     * @ORM\ManyToOne(targetEntity="BionicUniversity\Bundle\BlogBundle\Entity\Post", inversedBy="comments")
     */
    private $post;


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
     * Set text
     *
     * @param string $text
     * @return Comment
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Comment
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \BionicUniversity\Bundle\BlogBundle\Entity\Post $post
     */
    public function setPost($post)
    {
        $this->post = $post;
    }

    /**
     * @return \BionicUniversity\Bundle\BlogBundle\Entity\Post
     */
    public function getPost()
    {
        return $this->post;
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
