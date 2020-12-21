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
    $data = [
        'name' => 'Fabio',
        'articles' => [
            'sport',
            'lifestyle',
            'travel',
            'food'
        ]
    ];
    return view('homepage', $data);
})->name('home');

Route::get('/contacts', function(){

    return view('contacts');
})->name('contacts');

Route::get('/products', function(){

    return view('products');
})->name('products');

Route::get('/about-us', function(){

    return view('about-us');
})->name('about');
