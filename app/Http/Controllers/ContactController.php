<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact',[
            'header' => 'wtb',
            'footer' => 'hide'
        ] );
    }

    public function post(Request $r) {

        $data = [
                'name' => $r->name,
                'email' => $r->email,
                'subject' => $r->subject,
                'message' => $r->message
            ];

        // dump($data);

        Mail::send('mail.hello', ['data' => (object)$data ] , function ($message) use($r) {
            // dump($message);
            $message->sender($r->email, $r->name);
            $message->to('decoene.bruno@hotmail.com', 'Bruno De Coene');
            $message->cc($r->email, $r->firtstname . ' ' . $r->lastname);
            $message->subject($r->subject);
        });

        // Mail::send('mail.contact', $data, function($message) use ($email, $name) {
        //     $m->to($email,  $name);
        //     $m->from('youremail@example.com', 'Your Name'); 
        //     $m->subject('Hi there');
        // })
    
    }

    public function save() {

        return view('mail.confirm');
    }
}
