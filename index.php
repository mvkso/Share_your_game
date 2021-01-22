<?php



require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('','DefaultController');
Routing::get('projects','DefaultController');
Routing::get('discover','DefaultController');
Routing::get('account','DefaultController');
Routing::get('contacts','DefaultController');
Routing::get('yourProjects','DefaultController');
Routing::post('login','SecurityController');
Routing::post('addProject','DiscoverController');
Routing::run($path);