@extends('layout.mainlayout')

@section('title', 'Song')

@section('main_content')
    <h1>{{$pageTitle}}</h1>
    <div class="mt-4 p-5 bg-dark text-white rounded">
        <h1>{{$songs['song_name']}}</h1>
        <p>Singer: {{$songs['singer']}}</p>
        <p>Genre: {{$songs['song_genre']}}</p>
        <p>Released: {{$songs['released']}}</p>
    </div>
@endsection