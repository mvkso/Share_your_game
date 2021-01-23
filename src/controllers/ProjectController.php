<?php
require_once 'AppController.php';
require_once 'DiscoverController.php';
require_once __DIR__.'/../models/Project.php';
require_once __DIR__.'/../repository/ProjectRepository.php';


class ProjectController extends AppController
{
    private $projectRepository;
    private $message = [];

    public function __construct()
    {
        parent::__construct();
        $this->projectRepository = new ProjectRepository();
    }


    public function projects(){
        $projects = $this->projectRepository->getProjects();
        $this->render('projects', ['projects' => $projects]);
    }


}