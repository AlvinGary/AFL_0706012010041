<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SingerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $title = 'Singer';
        $pageTitle = 'Singer List';
        $singers = Singer::all();
        return view('singer', compact('title', 'pageTitle', 'singers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = 'Singer';
        $pageTitle = 'ADD Singer List';
        return view('createSinger', compact('title', 'pageTitle'));
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
        Singer::create([
            'singer_code' => $request->singer_code,
            'singer_name' => $request->singer_name,
            'debut_on' => $request->singer_debut_on,
            'origin' => $request->singer_origin,
            'genre' => $request->singer_genre,
            'record_label' => $request->singer_record_label
        ]);
        return redirect(route('singer.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $title = 'Singer';
        $pageTitle = 'Singer List';
        $singers = Singer::findOrFail($id);
        return view('showSinger', compact('title', 'pageTitle', 'singers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $title = 'Singer';
        $pageTitle = 'Edit Singer List';
        $singers = Singer::findOrFail($id);
        return view('editSinger', compact('title', 'pageTitle', 'singers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $singers = Singer::findOrFail($id);
        $singers->update([
            'singer_code' => $id,
            'singer_name' => $request->edit_singer_name,
            'debut_on' => $request->edit_singer_debut_on,
            'origin' => $request->edit_singer_origin,
            'genre' => $request->edit_singer_genre,
            'record_label' => $request->edit_singer_record_label
        ]);
        return redirect(route('singer.index', $id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Singer  $singer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $singers = Singer::findOrFail($id);
        $singers->delete();
        return redirect(route('singer.index'));
    }
}
