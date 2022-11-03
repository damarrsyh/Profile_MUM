<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function create()
    {
        return view('gallery.create');
    }
}
