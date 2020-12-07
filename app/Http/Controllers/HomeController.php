<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    public function index()
    {
        $images = \File::allFiles(public_path('images/collage'));

        // Mail::send('mail.hello',[],function($message){ $message->to('decoene.bruno@hotmail.com')->subject('laravel mail'); });

        return view('pages.home', [
            'images' => $images
        ]);
    }
}
