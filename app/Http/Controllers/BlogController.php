<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Blog',
            'content' => ''
        ];
    
        return view('blog.blog', $data);
    }

}