<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
return view('welcome');
})->name('inicio');

Route::get('/mime-sniffing-solucion', function () {
    return view('mime_sniffing_solucion');
})->name('mime.solucion');

Route::get('/secure-cookie-solucion', function () {
    return view('Secure_Cookie_solucion');
})->name('cookie.solucion');
