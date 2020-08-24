<?php

require 'bootstrap/bootstrap.php';

$db = Connection::make();

$queryBuilder = new QueryBuilder($db);

$router->direct(Request::uri(), Request::method());