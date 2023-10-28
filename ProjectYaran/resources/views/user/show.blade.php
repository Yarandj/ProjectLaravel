@extends('layouts.app')

@section('content')
    <div>
        ID: {{$user->id}}<br>
        Gebruikersnaam: {{$user->name}}<br>
        Email: {{$user->email}}<br>
{{--        Wachtwoord: {{$user->password}}<br>--}}
        <a href="/">Terug</a>
        <a href="/profile/{{$user->id}}/edit/">Veranderen</a>
    </div>
@endsection
