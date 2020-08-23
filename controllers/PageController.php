<?php

class PageController
{   
    public function index()
    {
        require 'views/index.view.php';
    }

    public function about()
    {
        require 'views/about.view.php';
    }

    public function contact()
    {
        require 'views/contact.view.php';
    }
}