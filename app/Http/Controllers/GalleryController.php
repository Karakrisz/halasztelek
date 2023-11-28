<?php

namespace App\Http\Controllers;

class GalleryController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Galéria',
            'content' => ''
        ];
    
        return view('gallery.galeria', $data);
    }

}