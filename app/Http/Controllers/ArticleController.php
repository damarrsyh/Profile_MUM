<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('article.index');
    }

    public function aindex()
    {
        return view('article.aindex');
    }

    public function create()
    {
        return view('article.create');
    }
}
