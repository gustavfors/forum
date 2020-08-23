<?php

require 'bootstrap/bootstrap.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri);

