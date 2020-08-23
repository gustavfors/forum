<?php

require 'models/Router.php';

$router = new Router();

require 'routes/routes.php';

$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri);

