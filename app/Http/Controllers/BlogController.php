<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PostController; 

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Blog',
            'content' => '' 
        ];

        $postController = new PostController();
        $posts = $postController->index(); 

        $data['posts'] = $posts;

        return view('blog.blog', $data);
    }
}