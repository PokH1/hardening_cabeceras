<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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
