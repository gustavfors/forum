<?php

class Connection
{
    public static function make()
    {
        return new PDO("sqlite:" . 'database/forum.db');
    }
}