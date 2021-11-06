@extends('layout.mainlayout')

@section('title', 'Edit Song')

@section('main_content')
    <h1>{{$pageTitle}}</h1>
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <form action="{{route('song.update', $songs->id)}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label><b>Song Name:</b></label>
                <input type="text" class="form-control" placeholder="Enter Song Name" name="edit_song_name" value="{{$songs->song_name}}" required>
            </div>
            <div class="form-group">
                <label><b>Released:</b></label>
                <input type="number" min="1900" max="2021" class="form-control" placeholder="Enter Song Released Year" name="edit_song_released" value="{{$songs->released}}" required>
            </div>
            <div class="form-group">
                <label><b>Song Genre:</b></label>
                <input type="text" class="form-control" placeholder="Enter Song Name" name="edit_song_genre" value="{{$songs->song_genre}}" required>
            </div>
            <div class="form-group">
                <label><b>Singer:</b></label>
                <select class="form-select form-control" name="edit_song_singer" required>
                    @foreach ($singers as $singer)
                        @if ($singer['singer_code'] == $songs['singer'])
                            <option value="{{$singer['singer_code']}}" selected>{{$singer['singer_name']}}</option>
                        @else
                            <option value="{{$singer['singer_code']}}">{{$singer['singer_name']}}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-success">Finish Edit Song</button>
            </div>
        </form>
    </div>
@endsection