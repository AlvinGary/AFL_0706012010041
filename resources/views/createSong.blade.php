@extends('layout.mainlayout')

@section('title', 'ADD Song')

@section('main_content')
    <h1>{{$pageTitle}}</h1>
    <div class="mt-4 p-5 bg-primary text-white rounded">
        <form action="{{route('song.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label><b>Song Name:</b></label>
                <input type="text" class="form-control" placeholder="Enter Song Name" name="song_name" required>
            </div>
            <div class="form-group">
                <label><b>Released:</b></label>
                <input type="number" min="1900" max="2021" class="form-control" placeholder="Enter Song Released Year" name="song_released" required>
            </div>
            <div class="form-group">
                <label><b>Song Genre:</b></label>
                <input type="text" class="form-control" placeholder="Enter Song Genre" name="song_genre" required>
            </div>
            <div class="form-group">
                <label><b>Singer:</b></label>
                <select class="form-select form-control" name="song_singer" required>
                    <option value="" selected disabled hidden>Choose Singer</option>
                    @foreach ($singers as $singer)
                        <option value="{{$singer['singer_code']}}">{{$singer['singer_name']}}</option>
                    @endforeach
                </select>
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-success">ADD Song</button>
            </div>
        </form>
    </div>
@endsection