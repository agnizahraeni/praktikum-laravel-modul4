<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/home', function () {
    return 'Hallo !, [Agni Zahraeni] Selamat Datang di [D4SM 48-01]';
});