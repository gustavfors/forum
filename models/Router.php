<?php

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestMethod)
    {
        if (array_key_exists($uri, $this->routes[$requestMethod])) {

            $split = explode('@', $this->routes[$requestMethod][$uri]);
            $controller = $split[0];
            $method = $split[1];

            return $this->callAction($controller, $method);
        }

        die("404 page not found.");
    }

    public function callAction($controller, $method)
    {
        $controller = new $controller;

        if (method_exists($controller, $method)) {
            return $controller->$method();
        }

        die("No such method on the controller");
    }
}