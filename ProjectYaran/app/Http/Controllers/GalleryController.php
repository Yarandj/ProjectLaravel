<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class GalleryController extends Controller
{
    public function index(){

        $galleries = gallery::where('status', true)->get();
        $genres = genre::all();
        return view('index', compact('galleries', 'genres'));
    }
    public function create(){
        return view('create', ['genres' => Genre::all()]);
    }
    public function store(){
        $gallery = new Gallery(request(['name', 'artist', 'genre_id']));
        $gallery->user_id = auth::user()->id;

        $gallery->save();
        return redirect('/ ');
    }
    public function edit(gallery $gallery){
        if ($gallery->user_id == auth::user()->id || auth::User()->role === 1){
            return view('edit',['gallery' => $gallery, 'genres' => Genre::all()]);
        }
        return redirect('/ ')->with('status', 'Hier heeft u geen toestemming voor!');
    }
    public function update(gallery $gallery){
        $gallery->update(request()->validate([
            'name' => 'required',
            'artist' => 'required',
            'genre_id' => 'required',
        ]));
        return redirect('/ ');
    }
    public function warning(gallery $gallery){
        if ($gallery->user_id == auth::user()->id || auth::User()->role === 1){
            return view('warning', compact('gallery'));
        }
        return redirect('/ ')->with('status', 'Hier heeft u geen toestemming voor!');
    }
    public function delete(gallery $gallery){
        $gallery->delete();
        return redirect('/ ');
    }
    public function show(gallery $gallery){
        if (auth()->user()->viewedGalleries()->where('gallery_id', $gallery->id)->count() === 0){
            auth()->user()->viewedGalleries()->attach($gallery);
            $gallery->increment('viewed');
        }
        return view('show', compact('gallery'));
    }
    public function status(gallery $gallery){
        $gallery->update(['status' => !$gallery->status]);
        return redirect()->route('home');
    }
    //zoek functie
    public function search(Request $request)
    {
        $search = $request->search;
        $filter = $request->filter;

        $query = Gallery::where('status', true);
//        $query = Gallery::query();

        if ($search) {
            $query->where('name', 'LIKE', "%$search%")->orwhere('artist', 'LIKE', "%$search%");
        }

        if ($filter) {
            $query->where('genre_id', '=', "$filter");
        }
        $galleries = $query->where('status', true)->get();

        $genres = Genre::all();

        return view('index', compact('genres', 'galleries'));
    }
}
