<?php

require 'models/Router.php';

$router = new Router();

$router->register('', 'controllers/index.php');
$router->register('about', 'controllers/about.php');
$router->register('contact', 'controllers/contact.php');

$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri);

