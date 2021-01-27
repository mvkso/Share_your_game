<?php

class User {
    private $id;
    private $email;
    private $password;
    private $name;
    private $surname;
    private $phone;
    private $image;
    private $age;
    private $country;
    private $experience;
    private $aboutme;
    private $description;



    public function __construct(
        int $id = null,
        string $email,
        string $password,
        string $name,
        string $surname
    ) {
        $this->id = $id;
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getId(): int
    {
        return $this->id;
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }

    public function getImage()
    {
        return $this->image;
    }


    public function setImage($image): void
    {
        $this->image = $image;
    }


    public function getAge()
    {
        return $this->age;
    }


    public function setAge($age): void
    {
        $this->age = $age;
    }


    public function getCountry()
    {
        return $this->country;
    }


    public function setCountry($country): void
    {
        $this->country = $country;
    }


    public function getExperience()
    {
        return $this->experience;
    }


    public function setExperience($experience): void
    {
        $this->experience = $experience;
    }


    public function getAboutme()
    {
        return $this->aboutme;
    }


    public function setAboutme($aboutme): void
    {
        $this->aboutme = $aboutme;
    }


    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description): void
    {
        $this->description = $description;
    }

}
