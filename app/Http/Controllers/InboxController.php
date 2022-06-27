<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function index()
    {

        return view('dashboard.inbox/index');
    }

    public function show($id)
    {

        $show_id = $id;
        return view('dashboard.inbox/show', ['id' => $show_id]);
    }

    public function new()
    {

        return view('dashboard.inbox/new');
    }
}
