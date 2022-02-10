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
    $prefooter_links = config('prefooter_links');

    $data = [
        'header_links' => $header_links,
        'comics' => $comics,
        'prefooter_links' => $prefooter_links
    ];

    return view('homepage', $data);
});

Route::get('/comic/{id}', function ($id) {

    $header_links = config('header_links');
    $comics = config('comics');
    $comics_to_show = false;

    foreach($comics as $comic) {
        if($comic['id'] == $id) {
            $comics_to_show = $comic;
        }
    }

    if(!$comics_to_show) {
        abort('404');
    }

    $data = [
        'header_links' => $header_links,
        'comic_info' => $comics_to_show
    ];

    return view('comic', $data);
})->name('comic');
