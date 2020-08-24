<?php

//load models
require 'models/Router.php';
require 'models/Request.php';
require 'models/Connection.php';
require 'models/QueryBuilder.php';

//controllers
require 'controllers/PageController.php';

//create router
$router = new Router();

//load routes
require 'routes/routes.php';