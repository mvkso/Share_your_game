<?php



require 'Routing.php';
session_start();

$path = trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('','DefaultController');
Routing::get('spotify','DefaultController');
Routing::get('register','SecurityController');
Routing::get('projects','ProjectController');
Routing::get('dislike','ProjectController');
Routing::get('like','ProjectController');

Routing::get('discover','DiscoverController');
Routing::post('addProject','DiscoverController');
Routing::post('search','DiscoverController');

Routing::get('account','AccountController');
Routing::get('yourProjects','AccountController');
Routing::post('edit_account','AccountController');

Routing::post('project_view','ProjectController');
Routing::post('logout', "SecurityController");
Routing::post('login','SecurityController');


Routing::run($path);