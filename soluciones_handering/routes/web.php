<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/hardening', function (Request $request) {

    // ✅ Cookie protegida
    $cookie = cookie(
        'session_id',
        'SESSION123456',
        60,        // minutos
        '/',
        null,
        false,     // secure (true en HTTPS)
        true,      // ✅ HttpOnly
        false,
        'Strict'
    );

    return response()
        ->view('hardening', [
            'nombre' => $request->query('nombre')
        ])
        ->cookie($cookie);
});

Route::get('/http-only', function () {

    $cookie = cookie(
        'session_id',
        'SESSION123456',
        60,
        '/',
        null,
        false,
        true,
        false,
        'Strict'
    );

    return response()
        ->view('http_only')
        ->cookie($cookie);
});