<?php

//load models
require 'models/Router.php';
require 'models/Request.php';

//controllers
require 'controllers/PageController.php';

//create router
$router = new Router();

//load routes
require 'routes/routes.php';