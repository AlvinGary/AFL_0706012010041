@extends('layout.mainlayout')

@section('title', 'Song')

@section('main_content')
    <h1>{{$pageTitle}}</h1>

    <div class="add_button">
        <a class="btn btn-primary" href="{{route('song.create')}}">Add Song</a>
    </div>

    @foreach ($songs as $song)
        <div id="music_card">
        <div id="icon">
            <table>
                <tr>
                    <td>
                        <button class="btn"><a class="bi bi-pencil-square text-warning" href="{{route('song.edit', $song->id)}}"></a></button>
                    </td>
                    <td>
                        <form action="{{route('song.destroy', $song->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn"><a class="bi bi-x-circle-fill text-danger"></a></button>
                        </form>
                    </td>
                <tr>
            </table>
        </div>
            <table class="table">
                {{-- <tr>
                    <td>ID</td>
                    <td>{{$song['id']}}</td>
                </tr> --}}
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
                <tr>
                    <td>Singer</td>
                    <td>
                        <a class="text-info" href="{{route('singer.show', $song->singers->singer_code)}}">
                            {{$song->singers->singer_name}}
                        </a>
                    </td>
                </tr>
                <tr><td></td></tr>
                <div class="song_details">
                    <tr>
                        <td colspan="2"><a class="btn btn-info" href="{{route('song.show', $song->id)}}">Song Details</a></td>
                        <td></td>
                    </tr> 
                </div>
            </table>
        </div>
    @endforeach
@endsection