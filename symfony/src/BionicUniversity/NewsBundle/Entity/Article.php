<?php

namespace BionicUniversity\NewsBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 */
class Article
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
    private $excerpt;

    /**
     * @var string
     */
    private $content;

    /**
     * @var integer
     */
    private $status;

    /**
     * @var integer
     */
    private $author;

    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tas;

    /**
     * @var \BionicUniversity\NewsBundle\Entity\Category
     */
    private $category;

    public $tag;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tag = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function __toString()
    {
        return $this->name;
    }

    public function getTag()
    {
        $tags = new ArrayCollection();
        foreach ($this->tas as $ta) {
            $tags[] = $ta->getTag();
        }
        return $tags;
    }

    public function setTag($tag)
    {
        foreach ($tag as $oneTag) {
            $ta = new TagArticle();
            $ta->setTag($oneTag);
            $ta->setArticle($this);

            $this->addTa($ta);
        }
    }

    public function getArticle()
    {
        return $this;
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
     * @return Article
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
     * Set excerpt
     *
     * @param string $excerpt
     * @return Article
     */
    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;

        return $this;
    }

    /**
     * Get excerpt
     *
     * @return string
     */
    public function getExcerpt()
    {
        return $this->excerpt;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set status
     *
     * @param integer $status
     * @return Article
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set author
     *
     * @param integer $author
     * @return Article
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return integer
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set categoryId
     *
     * @param integer $categoryId
     * @return Article
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Add tas
     *
     * @param \BionicUniversity\NewsBundle\Entity\TagArticle $tas
     * @return Article
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

    /**
     * Set category
     *
     * @param \BionicUniversity\NewsBundle\Entity\Category $category
     * @return Article
     */
    public function setCategory(\BionicUniversity\NewsBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \BionicUniversity\NewsBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }
}
