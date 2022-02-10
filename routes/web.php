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

Route::get('/characters', function () {
    $header_links = config('header_links');

    $data = [
        'header_links' => $header_links,
    ];

    return view('characters', $data);
})->name('characters');

Route::get('/movies', function () {
    $header_links = config('header_links');

    $data = [
        'header_links' => $header_links,
    ];

    return view('movies', $data);
})->name('movies');

Route::get('/tv', function () {
    $header_links = config('header_links');

    $data = [
        'header_links' => $header_links,
    ];

    return view('tv', $data);
})->name('tv');

Route::get('/games', function () {
    $header_links = config('header_links');

    $data = [
        'header_links' => $header_links,
    ];

    return view('games', $data);
})->name('games');

Route::get('/collectibles', function () {
    $header_links = config('header_links');

    $data = [
        'header_links' => $header_links,
    ];

    return view('collectibles', $data);
})->name('collectibles');

Route::get('/videos', function () {
    $header_links = config('header_links');

    $data = [
        'header_links' => $header_links,
    ];

    return view('videos', $data);
})->name('videos');

Route::get('/fans', function () {
    $header_links = config('header_links');

    $data = [
        'header_links' => $header_links,
    ];

    return view('fans', $data);
})->name('fans');

Route::get('/news', function () {
    $header_links = config('header_links');

    $data = [
        'header_links' => $header_links,
    ];

    return view('news', $data);
})->name('news');

Route::get('/shop', function () {
    $header_links = config('header_links');

    $data = [
        'header_links' => $header_links,
    ];

    return view('shop', $data);
})->name('shop');