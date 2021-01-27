<?php



require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('','DefaultController');
Routing::get('register','SecurityController');
Routing::get('projects','ProjectController');
Routing::get('discover','DiscoverController');
Routing::get('account','DefaultController');
Routing::get('contacts','DefaultController');
Routing::post('project_view','ProjectController');
Routing::get('yourProjects','AccountController');
Routing::post('login','SecurityController');
Routing::post('addProject','DiscoverController');
Routing::post('search','DiscoverController');
Routing::run($path);