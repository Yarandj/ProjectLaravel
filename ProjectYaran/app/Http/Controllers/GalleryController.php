<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::all();
        return view('index', compact('galleries'));
    }
    public function create(){
        return view('create');
    }
}
