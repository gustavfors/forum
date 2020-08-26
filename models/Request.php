<?php

class Request
{
    public static function uri()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

    public static function get($name)
    {
        if (isset($_GET[$name])) {
           return $_GET[$name];
        }
    }
}