<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/victima', function () {
    return view('victima');
});

Route::post('/transferir', function () {
    return view('exito');
});

Route::get('/atacante', function () {
    return view('atacante');
});