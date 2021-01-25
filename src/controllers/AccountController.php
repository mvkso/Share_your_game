<?php
require_once 'AppController.php';
require_once __DIR__.'/../models/Project.php';


class AccountController extends AppController
{
    private $projectRepository;

    public function __construct()
    {
        parent::__construct();
        $this->projectRepository = new ProjectRepository();
    }

    public function yourProjects(){
        $projects = $this->projectRepository->getProjectByUserId(1);
        $this->render('your_projects', ['projects' => $projects]);
    }


}