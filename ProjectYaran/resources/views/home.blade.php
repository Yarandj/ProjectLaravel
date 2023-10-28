@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <a class="btn btn-primary" href="/">Home</a>
            </div>
        </div>
    </div>
</div>
@foreach ($galleries as $gallery)
    <div class="bg-white shadow-md p-4 mt-4 rounded-lg">
        <p class="text-xl font-semibold mb-2">Naam schilderij: {{ $gallery->name }}</p>
        <p class="text-lg">Artiest: {{ $gallery->artist }}</p>
        <p class="text-lg">Genre: {{ $gallery->genre->name }}</p>
        <form action="{{ route('viewed.galleries', $gallery) }}" method="POST">
            @csrf
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md" type="submit">Bekijken</button>
        </form>
        <button class="text-white bg-green-500 hover:bg-green-700 font-semibold py-2 px-4 rounded-md mt-2 block"><a class="no-underline text-white" href="/galleries/edit/{{ $gallery->id }}">Bewerken</a></button>
        <form method="POST" action="{{ route('gallery.status', $gallery->id) }}">
            @csrf
            <button class="{{ $gallery->status ? 'bg-red-500' : 'bg-blue-500' }} hover:{{ $gallery->status ? 'bg-red-700' : 'bg-blue-700' }} text-white font-semibold py-2 px-4 rounded-md mt-2 block" type="submit">
                {{ $gallery->status ? 'Uitzetten' : 'Aanzetten' }}
            </button>
        </form>
    </div>
@endforeach

{{--@foreach ($galleries as $gallery)--}}
{{--    <div class="bg-white shadow-md p-4 mt-4">--}}
{{--        <p class="text-lg">Naam schilderij: {{$gallery->name}}</p>--}}
{{--        <p class="text-lg">Artiest: {{$gallery->artist}}</p>--}}
{{--        <p class="text-lg">Genre: {{$gallery->genre->name}}</p>--}}
{{--        <form action="{{route('viewed.galleries', $gallery)}}" method="POST">--}}
{{--            @csrf--}}
{{--            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4" type="submit">Bekijken</button>--}}
{{--        </form>--}}
{{--        <a class="text-white bg-green-500 hover:bg-green-700 font-bold py-2 px-4" href="/galleries/edit/{{$gallery->id}}">Bewerken</a>--}}
{{--        <form method="POST" action="{{ route('gallery.status', $gallery->id) }}">--}}
{{--            @csrf--}}
{{--            <button class="{{ $gallery->status ? 'bg-red-500' : 'bg-blue-500' }} hover:{{ $gallery->status ? 'bg-red-700' : 'bg-blue-700' }} text-white font-bold py-2 px-4 " type="submit">--}}
{{--                {{ $gallery->status ? 'Uitzetten' : 'Aanzetten' }}--}}
{{--            </button>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--@endforeach--}}
@endsection
