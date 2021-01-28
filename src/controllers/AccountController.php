<?php
require_once 'AppController.php';
require_once __DIR__.'/../models/Project.php';
require_once __DIR__.'/../models/User.php';



class AccountController extends AppController
{
    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png','image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/img/uploads/';

    private $projectRepository;
    private $userRepository;

    public function __construct()
    {

        parent::__construct();
        $this->projectRepository = new ProjectRepository();
        $this->userRepository = new UserRepository();
    }

    public function yourProjects(){
        $projects = $this->projectRepository->getProjectByUserId($_SESSION['user']);
        $this->render('your_projects', ['projects' => $projects]);
    }

    public function account(){
        $user = $this->userRepository->getUserDetailsAndAccountById($_SESSION['user']);
        $this->render('account',['user' => $user]);
    }


    public function  edit_account(){
        if ($this->isPost() && is_uploaded_file($_FILES['image']['tmp_name']) && $this->validate($_FILES['image']))
        {

            move_uploaded_file(
                $_FILES['image']['tmp_name'],
                dirname(__DIR__) . self::UPLOAD_DIRECTORY . $_FILES['image']['name']
            );

            $user = $this->userRepository->getUserDetailsAndAccountById($_SESSION['user']);
            $user-> setImage($_FILES['image']['name']);
            $int_post = (is_numeric($_POST['age']) ? (int)$_POST['age'] : 0);
            $user->setAge($int_post);
            $user->setCountry($_POST['country']);
            $user->setExperience($_POST['experience']);
            $user->setAboutme($_POST['aboutme']);
            $user->setDescription($_POST['description']);
            $this->userRepository->editUserAccount($user, $_SESSION['user']);
            return $this->render('account', ['user' => $user]);
        }

        return $this->render('edit_account',['messages'=>$this->message]);

    }


    private function validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'File is too large for destination file system.';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'File type is not supported.';
            return false;
        }
        return true;
    }

}