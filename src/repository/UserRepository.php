<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/User.php';

class UserRepository extends Repository
{
    public function getId(string $email){
        $stmt = $this->database->connect()->prepare('
        SELECT id FROM users WHERE email = :email
        ');

        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user['id'];
    }


    public function getUser(string $email): ?User
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users u LEFT JOIN users_details ud 
            ON u.id_user_details = ud.id WHERE email = :email
        ');
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            return null;
        }

        return new User(
            $user['id'],
            $user['email'],
            $user['password'],
            $user['name'],
            $user['surname']
        );
    }

    public function getUserDetailsAndAccountById(int $id): ?User
    {

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM users_account ua LEFT JOIN users u 
            ON ua.user_id = u.id WHERE user_id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);

        $user = new User(
            $_SESSION['user'],
            $data['email'],
            $data['password'],
            $_SESSION['name'],
            $_SESSION['surname']
        );

        $user->setAge($data['age']);
        $user->setImage($data['image']);
        $user->setCountry($data['country']);
        $user->setExperience($data['experience']);
        $user->setAboutme($data['aboutme']);
        $user->setDescription($data['description']);

        return $user;


    }

    public function editUserAccount(User $user, int $id){
        $stmt = $this->database->connect()->prepare('
            UPDATE users_account SET "image" = :image, "age"= :age, "country" = :country, "experience" = :experience,
                                     "aboutme"= :aboutme, "description"= :description
            WHERE user_id = :id
        ');
        $stmt->bindParam(':image', $user->getImage(), PDO::PARAM_STR);
        $stmt->bindParam(':age', $user->getAge(), PDO::PARAM_INT);
        $stmt->bindParam(':country', $user->getCountry(), PDO::PARAM_STR);
        $stmt->bindParam(':experience', $user->getExperience(), PDO::PARAM_STR);
        $stmt->bindParam(':aboutme', $user->getAboutme(), PDO::PARAM_STR);
        $stmt->bindParam(':description', $user->getDescription(), PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

    }

    public function addUser(User $user)
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO users_details (name, surname, phone)
            VALUES (?, ?, ?)
        ');

        $stmt->execute([
            $user->getName(),
            $user->getSurname(),
            $user->getPhone()
        ]);



        $stmt = $this->database->connect()->prepare('
            INSERT INTO users (email, password, id_user_details)
            VALUES (?, ?, ?)
        ');

        $stmt->execute([
            $user->getEmail(),
            $user->getPassword(),
            $this->getUserDetailsId($user),
        ]);

        $this->setUserId($user);

        $stmt = $this->database->connect()->prepare('
            INSERT INTO users_account (user_id) VALUES (?)
        ');

        $stmt->execute([
            $this->getId($user->getEmail())
        ]);


    }

    public function getUserDetailsId(User $user): int
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users_details WHERE name = :name AND surname = :surname AND phone = :phone
        ');
        $stmt->bindParam(':name', $user->getName(), PDO::PARAM_STR);
        $stmt->bindParam(':surname', $user->getSurname(), PDO::PARAM_STR);
        $stmt->bindParam(':phone', $user->getPhone(), PDO::PARAM_STR);
        $stmt->execute();

        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['id'];
    }

    public function  getUserAccountId(User $user)
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users_account WHERE user_id = :id
        ');
        $stmt->bindParam(':id', $user->getId(), PDO::PARAM_INT);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $data['id'];
    }

    public function setUserId(User $user){
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.users WHERE email = :email
        ');
        $stmt->bindParam(':email', $user->getEmail(), PDO::PARAM_STR);
        $stmt->execute();
        $data = $stmt->fetch(PDO::FETCH_ASSOC);
        $user->setId($data['id']);
    }




}