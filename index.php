<?php

$routes = [
    '' => 'home.php',
    'about' => 'about.php',
    'contact' => 'contact.php'
];


$uri = trim($_SERVER['REQUEST_URI'], '/');

if (array_key_exists($uri, $routes)) {
    require "{$routes[$uri]}";
} else {
    die('404 page not found.');
}
