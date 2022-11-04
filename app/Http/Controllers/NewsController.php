<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news.index');
    }
    
    public function aindex()
    {
        return view('news.aindex');
    }

    public function create()
    {
        return view('news.create');
    }
}
