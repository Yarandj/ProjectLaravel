@extends('layouts.app')

@section('content')
    <div class="">
        <form method="POST" action="/galleries/{{$gallery->id}}">
            @csrf
            @method('PUT')

            <div class="">
                <label class="label" for="name">Naam Schilderij:</label><br>
                <input id="name" type="text" name="name" placeholder="Vul de naam van het schilderij in" value="{{ old('name', $gallery->name) }}"><br>

                <label class="label" for="artist">Artiest:</label><br>
                <input id="artist" type="text" name="artist" placeholder="Vul de naam van de artiest in" value="{{ old('artist', $gallery->artist) }}"><br>

                <label class="label" for="genre">genre</label>

                <select name="genre">
                    @foreach($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="">
                <button class="" type="submit">submit</button>
            </div>

        </form>
    </div>
@endsection
