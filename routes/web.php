<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::view('/', 'home')->name('home');
Route::view('/operario', 'operario')->name('operario');

