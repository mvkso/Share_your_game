<?php

require_once 'AppController.php'; 

class DefaultController extends AppController{

    public function index(){

        $this->render('login');
    }

    public function projects(){

        $this->render('projects');
    }

    public function discover(){
        $this->render('discover');

    }

    public function account(){
        $this->render('account');

    }

    public function contacts(){
        $this->render('contacts');

    }
    public function yourProjects(){
        $this->render('your_projects');
    }
    
}