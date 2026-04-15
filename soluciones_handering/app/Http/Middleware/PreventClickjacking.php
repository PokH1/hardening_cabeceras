<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PreventClickjacking
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
public function handle(Request $request, Closure $next): Response
{
    $response = $next($request);

    // Método clásico
    $response->headers->set('X-Frame-Options', 'DENY');

    // Método moderno
    $response->headers->set(
        'Content-Security-Policy',
        "frame-ancestors 'none';"
    );

    return $response;
}
}
