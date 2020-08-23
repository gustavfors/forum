<?php

//load models
require 'models/Router.php';
require 'models/Request.php';

//create router
$router = new Router();

//load routes
require 'routes/routes.php';