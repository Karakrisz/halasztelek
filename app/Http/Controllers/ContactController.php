<?php

namespace App\Http\Controllers;

class ContactController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Kapcsolat',
            'content' => ''
        ];
    
        return view('contact.kapcsolat', $data);
    }

}