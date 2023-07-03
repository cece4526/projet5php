<?php

namespace App\Model;

class Comment
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $pseudo;

    /**
     * @var string
     */
    private $content;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var bool
     */
    private $flag;

    /**
     * @var int
     */
    private $status;

    /**
     * @var int
     */
    private $article_id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * @param string $pseudo
     */
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }
     /**
      * @return bool
      */
    public function isFlag()
    {
        return $this->flag;
    }

    /**
     * @param bool $flag
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param int $id
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    /**
     * @return int
     */
    public function getArticleIdComment()
    {
        return $this->article_id;
    }

    /**
     * @param int $id
     */
    public function setArticleIdComment($article_id)
    {
        $this->article_id = $article_id;
    }    
}
