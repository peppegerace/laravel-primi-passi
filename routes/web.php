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

Route::get('/', function () {
    $var = 'World';
    return view('home', compact('var'));
});

Route::get('/prodotti', function() {
    return view('prodotti');
});

Route::get('/servizi', function() {
    return view('servizi');
});

Route::get('/contatti', function() {
    return view('contatti');
});
