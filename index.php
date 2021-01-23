<?php



require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('login','DefaultController');
Routing::get('register','DefaultController');
Routing::get('projects','ProjectController');
Routing::get('discover','DefaultController');
Routing::get('account','DefaultController');
Routing::get('contacts','DefaultController');
Routing::get('yourProjects','DefaultController');
Routing::post('login','SecurityController');
Routing::post('addProject','DiscoverController');
Routing::post('search','DiscoverController');
Routing::run($path);