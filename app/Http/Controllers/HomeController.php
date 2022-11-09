<?php

namespace App\Http\Controllers;

use App\Models\Summary;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // return session('role');
        return view('home.index', ['summaries' => Summary::all()]);
    }
}
