<?php

class PageController
{   
    public function index()
    {
        $posts = App::get('database')->selectAll('posts');

        return view('index', [
            'posts' => $posts
        ]);
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