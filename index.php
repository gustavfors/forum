<?php

require 'bootstrap/bootstrap.php';

$router->direct(Request::uri(), Request::method());