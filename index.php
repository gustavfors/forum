<?php

class Router
{
    protected $routes = [];

    public function register($uri, $view)
    {
        $this->routes[$uri] = $view;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }

        die("404 page not found.");
    }
}


$router = new Router();

$router->register('', 'home.php');
$router->register('about', 'about.php');
$router->register('contact', 'contact.php');


$uri = trim($_SERVER['REQUEST_URI'], '/');

require $router->direct($uri);

