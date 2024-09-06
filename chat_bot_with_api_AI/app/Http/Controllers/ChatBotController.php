<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatBotController extends Controller
{
    //create index function
    public function index()
    {
        return view('chatbot');
    }
}
