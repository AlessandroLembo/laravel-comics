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
    return view('comics');
})->name('comics');

// Rotta per la pagina dove visualizzo un comic specifico
Route::get('/comic', function () {
    return view('comic');
})->name('comic');

Route::get('/comic', function () {
    return view('comic');
})->name('comic');
