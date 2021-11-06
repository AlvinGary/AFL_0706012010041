@extends('layout.mainlayout')

@section('title', 'Singer')

@section('main_content')
    <h1>{{$pageTitle}}</h1>
    <div class="mt-4 p-5 bg-dark text-white rounded">
        <h1>{{$singers['singer_name']}}</h1>
        <p>Code: {{$singers['singer_code']}}</p>
        <p>Genre: {{$singers['genre']}}</p>
        <p>Debut on: {{$singers['debut_on']}}</p>
        <p>origin: {{$singers['origin']}}</p>
        <p>Record Label: {{$singers['record_label']}}</p>
    </div>

    <h2><b>Song List</b></h2>

    @foreach ($singers->songs as $song)
        <div class="music_card my-5 p-3">
            <table class="table">
                <tr>
                    <td>ID</td>
                    <td>{{$song['id']}}</td>
                </tr>
                <tr>
                    <td>Song Name</td>
                    <td>{{$song['song_name']}}</td>
                </tr>
                <tr>
                    <td>Released</td>
                    <td>{{$song['released']}}</td>
                </tr>
                <tr>
                    <td>Genre</td>
                    <td>{{$song['song_genre']}}</td>
                </tr>
            </table>
        </div>
    @endforeach
@endsection