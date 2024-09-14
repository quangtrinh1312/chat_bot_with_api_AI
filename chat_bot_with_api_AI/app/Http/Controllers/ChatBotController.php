<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
class ChatBotController extends Controller
{
    //create index function
    public function index()
    {
        //get the comments
        $test = new Test();
        $comments = $test->getComments();
        //return the comments to the view
        return view('chatbot', ['comments' => $comments]);
    }
}
