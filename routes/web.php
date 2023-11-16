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
    $products = ['Manga', 'Action Figure', 'Funko Pop', 'Carte Collezionabili'];
    return view('prodotti', compact('products'));
});

Route::get('/servizi', function() {
    $services = ['Poster Personalizzabili', 'Action Figure personalizzabili'];
    return view('servizi', compact('services'));
});

Route::get('/contatti', function() {
    $contacts = ['Tel: 0964 334455', 'e-mail: fumettiefumetti@gmail.com'];
    return view('contatti', compact('contacts'));
});
