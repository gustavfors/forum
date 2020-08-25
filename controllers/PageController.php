<?php

class PageController
{   
    public function index()
    {
        $posts = App::get('database')->query(
            "SELECT * FROM posts WHERE id = :id",
            "Post",
            [
                ':id' => 1
            ]
        );

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