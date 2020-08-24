<?php

class App
{
    protected static $registry = [];

    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    public function get($key)
    {
        return static::$registry[$key];
    }
}
