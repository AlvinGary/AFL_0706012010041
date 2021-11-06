<?php

use App\Http\Controllers\SingerController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'pageTitle' => 'WELCOME HOME'
    ]);
});

Route::resource('/song', SongController::class);

Route::resource('/singer', SingerController::class);
