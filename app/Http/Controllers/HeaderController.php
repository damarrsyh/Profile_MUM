<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
{
    public function index()
    {
        return view('header.index');
    }
    public function edit()
    {
        return view('header.edit');
    }
}
