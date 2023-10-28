@extends('layouts.app')

@section('content')
    <div>
        Naam schilderij: {{$gallery->name}}<br>
        Artiest: {{$gallery->artist}}<br>
        Genre: {{$gallery->genre->name}}<br>
        <a href="/">Terug</a>
        @if($gallery->user_id == auth::user()->id || auth::User()->role === 1)
            <a href="/galleries/{{$gallery->id}}/delete/">Verwijderen</a>
        @endif
    </div>
@endsection

