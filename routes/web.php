<?php

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
    $comics_array = config("comics");
    // !DEBUG
    // dd($comics_array);
    
    $data = [
        "comics_array" => $comics_array
    ];

    return view('home', $data);
})->name('home');

Route::get('/comics/{id}', function ($id) {
    $comics_array = config("comics");
    // !DEBUG
    // dd($comics_array);

    $single_comics = [];

    foreach($comics_array as $comics) {
        if($comics["id"] == $id) {
            $single_comics = $comics;
        }
    }
    // !DEBUG
    // dd($single_comics);

    if(empty($single_comics)) {
        abort("404");
    }

    $data = [
        "single_comics" => $single_comics
    ];
    // !DEBUG
    // dd($data["comics_array"]);

    return view('comics-info', $data);
})->name('comics');