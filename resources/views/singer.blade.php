@extends('layout.mainlayout')

@section('title', 'Singer')

@section('main_content')
    <h1>{{$pageTitle}}</h1>

    <div class="add_button">
        <a class="btn btn-primary float-end" href="{{route('singer.create')}}">Add Singer</a>
    </div>
        <div id="singer">
        <table class="table table-dark">
            <tr>
                <td>No</td>
                <td>Code</td>
                <td>Singer Name</td>
                <td>Debut on</td>
                <td>Origin</td>
                <td>Genre</td>
                <td>Record Label</td>
                <td>Actions</td>
            </tr>

        @foreach ($singers as $singer)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$singer['singer_code']}}</td>
                <td>{{$singer['singer_name']}}</td>
                <td>{{$singer['debut_on']}}</td>
                <td>{{$singer['origin']}}</td>
                <td>{{$singer['genre']}}</td>
                <td>{{$singer['record_label']}}</td>
                <td>
                    <div class="d-flex gap-2">
                        <a class="btn btn-info" href="{{ route('singer.show', $singer->singer_code)}}">Show</a>
                        <a class="btn btn-primary" href="{{ route('singer.edit', $singer->singer_code)}}">Edit</a>
                        <form action="{{route('singer.destroy', $singer->singer_code)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        </div>
    @endforeach
    </table>
@endsection