<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'Song';
        $pageTitle = 'Song List';
        $songs = Song::all();
        return view('song', compact('title', 'pageTitle', 'songs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'ADD Song';
        $pageTitle = 'Add Song List';
        $singers = Singer::all();
        return view('createSong', compact('title', 'pageTitle', 'singers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Song::create([
            'song_name' => $request->song_name,
            'released' => $request->song_released,
            'song_genre' => $request->song_genre,
            'singer' => $request->song_singer
        ]);
        return redirect(route('song.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $title = 'Song';
        $pageTitle = 'Song Details';
        $songs = Song::findOrFail($id);
        return view('showSong', compact('title', 'pageTitle', 'songs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $title = 'Edit Song';
        $pageTitle = 'Edit Song List';
        $songs = Song::findOrFail($id);
        $singers = Singer::all();
        return view('editSong', compact('title', 'pageTitle', 'songs', 'singers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $songs = Song::findOrFail($id);
        $songs->update([
            'song_name' => $request->edit_song_name,
            'released' => $request->edit_song_released,
            'song_genre' => $request->edit_song_genre,
            'singer' => $request->edit_song_singer
        ]);
        return redirect(route('song.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $songs = Song::findOrFail($id);
        $songs->delete();
        return redirect(route('song.index'));
    }
}
