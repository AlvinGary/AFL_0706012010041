@extends('layout.mainlayout')

@section('title', 'ADD Singer')

@section('main_content')
    <h1>{{$pageTitle}}</h1>
    <div class="mt-4 p-5 bg-info text-black rounded">
        <form action="{{route('singer.store')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label><b>Singer Code(Alias/Stage Name):</b></label>
                <input type="text" class="form-control" placeholder="Enter Singer Code" name="singer_code" required>
            </div>
            <div class="form-group">
                <label><b>Singer Name:</b></label>
                <input type="text" class="form-control" placeholder="Enter Singer Name" name="singer_name" required>
            </div>
            <div class="form-group">
                <label><b>Debut On:</b></label>
                <input type="number" min="1900" max="2022" class="form-control" placeholder="Enter First Debut Year" name="singer_debut_on">
            </div>
            <div class="form-group">
                <label><b>Origin(Place of Birth/First Debut Place):</b></label>
                <input type="text" class="form-control" placeholder="Enter Singer Origin" name="singer_origin">
            </div>
            <div class="form-group">
                <label><b>Genre:</b></label>
                <input type="text" class="form-control" placeholder="Enter Singer Genre" name="singer_genre">
            </div>
            <div class="form-group">
                <label><b>Record Label:</b></label>
                <input type="text" class="form-control" placeholder="Enter Record Label" name="singer_record_label">
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-success">ADD Singer</button>
            </div>
        </form>
    </div>
@endsection