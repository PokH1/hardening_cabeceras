<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Http\Response; 
use App\Http\Middleware\SecureHeaders;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/mime-sniffing-solucion', function () {
    return view('mime_sniffing_solucion');
})->name('mime.solucion');

Route::get('/secure-cookie-solucion', function () {
    return view('Secure_Cookie_solucion');
})->name('cookie.solucion');

Route::get('/same-site', function () {
    return view('same_site.same-site-solution');
})->name('same-site.solucion');

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


Route::get('/permission-policy', function (Request $request) {

    // Generar la vista como Response
    $response = response()->view('permission_policy');

    // Agregar la cabecera segura
    $response->headers->set(
        'Permissions-Policy',
        'geolocation=(), camera=(), microphone=(), payment=(), fullscreen=(self)'
    );

    return $response;
});
})->name('http-only');

Route::get('/csp', function () {
    $nonce = base64_encode(random_bytes(16));

    return response()
        ->view('csp-solution', compact('nonce'))
        ->header("Content-Security-Policy", "script-src 'nonce-$nonce'");
})->name('csp');
