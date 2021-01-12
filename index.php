<?php



require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'],'/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('index','DefaultController');
Routing::get('projects','DefaultController');
Routing::get('discover','DefaultController');
Routing::get('account','DefaultController');
Routing::get('contacts','DefaultController');
Routing::run($path);