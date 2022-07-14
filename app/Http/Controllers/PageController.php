<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('home');
    }

    public function list() {
        $movies = \App\Movie::all(['title']);
        return view('list', compact('movies'));

    }
}
