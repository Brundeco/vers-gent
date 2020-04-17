<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $images = \File::allFiles(public_path('images/collage'));

        return view('pages.home', [
            'images' => $images
        ]);
    }
}
