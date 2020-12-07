<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebshopController extends Controller
{
    public function index()
    {
        return view('pages.webshop', [
            'header' => 'wtb'
        ]);
    }
}
