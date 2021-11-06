@extends('layout.mainlayout')

@section('title', 'Edit Singer')

@section('main_content')
    <h1>{{$pageTitle}}</h1>
    <div class="mt-4 p-5 bg-info text-black rounded">
        <form action="{{route('singer.update', $singers->singer_code)}}" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PATCH">
            <div class="form-group">
                <label><b>Singer Code(Alias/Stage Name):</b></label>
                <input type="text" class="form-control" name="edit_singer_code" value="{{$singers->singer_code}}" disabled>
            </div>
            <div class="form-group">
                <label><b>Singer Name:</b></label>
                <input type="text" class="form-control" placeholder="Enter Singer Name" name="edit_singer_name" value="{{$singers->singer_name}}" required>
            </div>
            <div class="form-group">
                <label><b>Debut On:</b></label>
                <input type="number" min="1900" max="2021" class="form-control" placeholder="Enter First Debut Year" name="edit_singer_debut_on" value="{{$singers->debut_on}}">
            </div>
            <div class="form-group">
                <label><b>Origin(Place of Birth/First Debut Place):</b></label>
                <input type="text" class="form-control" placeholder="Enter Singer Origin" name="edit_singer_origin" value="{{$singers->origin}}">
            </div>
            <div class="form-group">
                <label><b>Genre:</b></label>
                <input type="text" class="form-control" placeholder="Enter Singer Genre" name="edit_singer_genre" value="{{$singers->genre}}">
            </div>
            <div class="form-group">
                <label><b>Record Label:</b></label>
                <input type="text" class="form-control" placeholder="Enter Record Label" name="edit_singer_record_label" value="{{$singers->record_label}}">
            </div>
            <br>
            <div>
                <button type="submit" class="btn btn-success">Finish Edit Singer</button>
            </div>
        </form>
    </div>
@endsection