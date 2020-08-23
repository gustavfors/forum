<?php

require 'bootstrap/bootstrap.php';

require $router->direct(Request::uri(), Request::method());