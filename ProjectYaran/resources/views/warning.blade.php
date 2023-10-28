@extends('layouts.app')

@section('content')
<p>
    Naam schilderij: {{$gallery->name}}<br>
    Artiest: {{$gallery->artist}}<br>
    Genre: {{$gallery->genre->name}}<br>
</p>
<p>Wilt u deze gallerij verwijderen?</p>
<form method="POST" action="">
    @csrf
    @method('DELETE')
    <button class="btn btn-primary" type="submit">Yes</button>
</form>
<a href="/"><button class="btn btn-primary">No</button></a>
@endsection
