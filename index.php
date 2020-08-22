<?php

require 'models/Router.php';

$router = new Router();

$router->register('', 'home.php');
$router->register('about', 'about.php');
$router->register('contact', 'contact.php');

$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri);

