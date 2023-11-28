<?php

namespace App\Http\Controllers;

class PromotionsController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Akciók',
            'content' => ''
        ];
    
        return view('promotions.akciok', $data);
    }

}