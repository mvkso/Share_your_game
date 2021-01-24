<?php


class Project
{
    private int $id;
    private $title;
    private $description;
    private $image;


    public function __construct(int $id=null,$title, $description, $image)
    {
        $this->id= $id;
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
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




}