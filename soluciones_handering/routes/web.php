<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('security-demo-solution');
});

Route::get('/mime-sniffing-solucion', function () {
    return view('mime_sniffing_solucion');
})->name('mime.solucion');

Route::get('/secure-cookie-solucion', function () {
    return view('Secure_Cookie_solucion');
})->name('cookie.solucion');
    return view('security-demo-solution');
});

Route::get('/csp', function () {
    return view('csp-solution');
});

Route::get('/same-site', function () {
    return view('same-site-solution');
});

Route::post('/transfer', function () {
    $amount = request('amount', '0');
    $to = request('to', 'desconocido');

    return "Transferencia SEGURA validada con CSRF: $$amount a $to";
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
