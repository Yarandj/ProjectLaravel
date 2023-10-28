@extends('layouts.app')

@section('content')
    <div class="">
        <form method="POST" action="/profile/{{$user->id}}">
            @csrf
            @method('PUT')

            <div class="">
                <label class="label" for="name">Naam gebruiker:</label><br>
                <input id="name" type="text" name="name" placeholder="Vul uw gebruikersnaam in" required value="{{ old('name', $user->name) }}"><br>

                <label class="label" for="artist">Email:</label><br>
                <input id="email" type="email" name="email" placeholder="Vul uw emailadres in" required value="{{ old('email', $user->email) }}"><br>

{{--                <label class="label" for="password">Wachtwoord:</label><br>--}}
{{--                <input id="password" type="text" name="password" placeholder="Vul uw nieuwe wachtwoord in" value="{{ old('password', $user->password) }}"><br>--}}
            </div>

            <div class="">
                <button class="" type="submit">submit</button>
            </div>

        </form>
    </div>
@endsection
