<?php

namespace BionicUniversity\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TagArticle
 */
class TagArticle
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $tagId;

    /**
     * @var integer
     */
    private $articleId;

    /**
     * @var \BionicUniversity\NewsBundle\Entity\Article
     */
    private $article;

    /**
     * @var \BionicUniversity\NewsBundle\Entity\Tag
     */
    private $tag;


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
     * Set tagId
     *
     * @param integer $tagId
     * @return TagArticle
     */
    public function setTagId($tagId)
    {
        $this->tagId = $tagId;

        return $this;
    }

    /**
     * Get tagId
     *
     * @return integer 
     */
    public function getTagId()
    {
        return $this->tagId;
    }

    /**
     * Set articleId
     *
     * @param integer $articleId
     * @return TagArticle
     */
    public function setArticleId($articleId)
    {
        $this->articleId = $articleId;

        return $this;
    }

    /**
     * Get articleId
     *
     * @return integer 
     */
    public function getArticleId()
    {
        return $this->articleId;
    }

    /**
     * Set article
     *
     * @param \BionicUniversity\NewsBundle\Entity\Article $article
     * @return TagArticle
     */
    public function setArticle(\BionicUniversity\NewsBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \BionicUniversity\NewsBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set tag
     *
     * @param \BionicUniversity\NewsBundle\Entity\Tag $tag
     * @return TagArticle
     */
    public function setTag(\BionicUniversity\NewsBundle\Entity\Tag $tag = null)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * Get tag
     *
     * @return \BionicUniversity\NewsBundle\Entity\Tag 
     */
    public function getTag()
    {
        return $this->tag;
    }
}
