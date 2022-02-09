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
    $header_links = config('header_links');
    $comics = config('comics');

    $data = [
        'header_links' => $header_links,
        // 'comics' => $comics
    ];

    return view('homepage', $data);
});
