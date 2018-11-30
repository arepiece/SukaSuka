<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
     public function send(Request $request)
    {
//        $title = $request->input('title');
//        $content = $request->input('content');

        \Mail::send('email.send', ['title' => 'sandboxtesting', 'content' => 'xxxxxxxxxxx'], function ($message)
        {

//            $message->from('me@gmail.com', 'Christian Nwamba');

            $message->to('haffiz_ito@yahoo.com');

        });


        return response()->json(['message' => 'Request completed']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
