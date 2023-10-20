<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index(){
        $galleries = Gallery::all();
        return view('index', compact('galleries'));
    }
    public function create(){
        return view('create', ['genres' => Genre::all()]);
    }
    public function store(){
//        dd(\request('genre'));
        $gallery = new Gallery(request(['name', 'artist', 'genre']));
//        dd($gallery->genre);

        $gallery->save();
        return redirect('/ ');
    }
    public function edit(gallery $gallery){
        return view('edit',['gallery' => $gallery, 'genres' => Genre::all()]);
    }
    public function update(gallery $gallery){
        $gallery->update(request()->validate([
            'name' => 'required',
            'artist' => 'required',
            'genre' => 'required',
        ]));
        return redirect('/ ');
    }
    public function show(gallery $gallery){
        return view('show', compact('gallery'));
    }
}
