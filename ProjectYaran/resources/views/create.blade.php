@extends('layouts.app')

@section('content')
    <form method="POST" action="/galleries">
        @csrf
            <div class="">

                <label class="label" for="name">Naam Schilderij:</label><br>
                <input id="name" type="text" name="name" placeholder="Vul de naam van het schilderij in" value=""><br>

                <label class="label" for="artist">Artiest:</label><br>
                <input id="artist" type="text" name="artist" placeholder="Vul de naam van de artiest in" value=""><br>

                <label class="label" for="genre_id"></label>

                <select name="genre_id">
                    @foreach($genres as $genre)
                        <option value="{{$genre->id}}">{{$genre->name}}</option>

                    @endforeach
                </select>
            </div>

                <div class="">
                    <button class="" type="submit">submit</button>
                </div>
    </form>
@endsection
