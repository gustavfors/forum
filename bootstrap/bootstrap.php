<?php

//load functions
require 'functions/functions.php';

//load models
require 'models/App.php';
require 'models/Router.php';
require 'models/Request.php';
require 'models/Connection.php';
require 'models/QueryBuilder.php';

//App setup
App::bind('database', new QueryBuilder(Connection::make()));

//controllers
require 'controllers/PageController.php';

//create router
$router = new Router();

//load routes
require 'routes/routes.php';

