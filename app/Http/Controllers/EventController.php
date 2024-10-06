<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function Index(){
        return view('home');
    }

    public function create(){
        return view('event.create');
    }

}
