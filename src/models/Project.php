<?php


class Project
{
    private $id;
    private $title;
    private $description;
    private $image;
    private $authorName;
    private $authorSurame;
    private $like;
    private $dislike;




    public function __construct($title, $description, $image, $like=0, $dislike=0, $id=null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->id= $id;
        $this->like = $like;
        $this->dislike = $dislike;
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }


    public function getTitle():string
    {
        return $this->title;
    }


    public function setTitle(string $title): void
    {
        $this->title = $title;
    }


    public function getDescription():string
    {
        return $this->description;
    }


    public function setDescription(string $description): void
    {
        $this->description = $description;
    }


    public function getImage():string
    {
        return $this->image;
    }


    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getAuthorName()
    {
        return $this->authorName;
    }


    public function setAuthorName($authorName): void
    {
        $this->authorName = $authorName;
    }


    public function getAuthorSurame()
    {
        return $this->authorSurame;
    }


    public function setAuthorSurame($authorSurame): void
    {
        $this->authorSurame = $authorSurame;
    }

    /**
     * @return int
     */
    public function getLike(): int
    {
        return $this->like;
    }

    /**
     * @param int $like
     */
    public function setLike(int $like): void
    {
        $this->like = $like;
    }

    /**
     * @return int
     */
    public function getDislike(): int
    {
        return $this->dislike;
    }

    /**
     * @param int $dislike
     */
    public function setDislike(int $dislike): void
    {
        $this->dislike = $dislike;
    }




}