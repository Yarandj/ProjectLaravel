@extends('layouts.app')

@section('content')
    <div class="p-6">
        <h1 class="text-3xl font-semibold">Home</h1>
        <p class="mt-4 text-lg">Welkom op deze pagina!</p>
        @if(session('status'))
            <div class="alert alert-danger">{{session('status')}}</div>
        @endif
        <div class="w-100 bg-white shadow-md flex-row align-content-center p-2">
            <form method="post" action="{{route('gallery.search')}}">
                @csrf
                @method('PUT')
                <input type="text" placeholder="Zoek gallerijen" name="search" id="search" value="{{old('search')}}">
                <label for="filter" class="text-white mx-2">Filter :</label>
                <select name="filter" id="filter">
                    <option value="" selected>alle</option>
                    @foreach($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->name}}</option>
                    @endforeach
                </select>
                <button type="submit" class="mx-2">zoeken</button>
            </form>
        </div>
        @foreach ($galleries as $gallery)
            <div class="bg-white shadow-md p-4 mt-4">
                <p class="text-lg">Naam schilderij: {{$gallery->name}}</p>
                <p class="text-lg">Artiest: {{$gallery->artist}}</p>
                <p class="text-lg">Genre: {{$gallery->genre->name}}</p>
                <form action="{{route('viewed.galleries', $gallery)}}" method="POST">
                    @csrf
                    <button class="text-blue-600 hover:underline" type="submit">Bekijk</button>
                </form>
                @if($gallery->user_id == auth::user()->id || auth::User()->role === 1)
                <a class="text-green-600 hover:underline" href="/galleries/edit/{{$gallery->id}}">Edit</a>
                @endif
                @if(auth::User()->role === 1)
                    <a class="text-green-600 hover:underline" href="/home">Admin</a>
                @endif
            </div>
        @endforeach
    </div>
@endsection

