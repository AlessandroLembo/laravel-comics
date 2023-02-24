<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rotta per la pagina che visualizza tutti i comics
Route::get('/comics', function () {
    $comics = config('comics');

    return view('layouts.comics', compact('comics'));
})->name('comics');

// Rotta per la pagina dove visualizzo un comic specifico
Route::get('/comic', function () {
    return view('layouts.comic');
})->name('comic');

Route::get('/characters', function () {
    return view('layouts.characters');
})->name('characters');

Route::get('/movies', function () {
    return view('layouts.movies');
})->name('movies');

Route::get('/tv', function () {
    return view('layouts.tv');
})->name('tv');
