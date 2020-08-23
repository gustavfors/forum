<?php

require 'bootstrap/bootstrap.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');
$requestMethod = $_SERVER['REQUEST_METHOD'];

require $router->direct($uri, $requestMethod);


