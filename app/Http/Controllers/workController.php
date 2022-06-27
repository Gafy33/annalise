<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class workController extends Controller
{
    public function chat()
    {

        return view('dashboard.work/chat');
    }
}
