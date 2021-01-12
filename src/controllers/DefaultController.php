<?php

require_once 'AppController.php'; 

class DefaultController extends AppController{

    public function index(){
        //TODO display login.html
        $this->render('login');
    }

    public function projects(){
        //todo display projects.html
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
    
}