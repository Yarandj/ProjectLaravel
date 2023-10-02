<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function Gallery(){
        $galleries = Gallery::all();
        return view('index', compact('galleries'));
    }
}
