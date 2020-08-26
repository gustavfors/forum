<?php

class PageController
{   
    public function index()
    {

        $page = Request::get('page') ?? 0;

        $limit = 3;
        $offset = ($page - 1) * 3;

        $pages = ceil(App::get('database')->query(
            "SELECT COUNT(id) as 'total_pages' FROM posts"
        )[0]->total_pages / 3);
        
        $posts = App::get('database')->query(
            "SELECT * FROM posts LIMIT :limit OFFSET :offset",
            [
                ':limit' => $limit,
                ':offset' => $offset
            ]
        );

        return view('index', [
            'posts' => $posts,
            'pages' => $pages
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