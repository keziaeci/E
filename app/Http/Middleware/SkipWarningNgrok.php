<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SkipWarningNgrok
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $res = $next($request);
        // return $res->header('ngrok-skip-browser-warning', '123');
        // $request->headers->set('ngrok-skip-browser-warning','123');
        // return $next($request);

        $response = $next($request);
    $response->headers->set('ngrok-skip-browser-warning', '123');

    return $response;
    }
}
