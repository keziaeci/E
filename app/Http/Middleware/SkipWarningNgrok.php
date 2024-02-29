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
        // header('ngrok-skip-browser-warning' , true);

        // return $next($request);

        // $request->headers->set('ngrok-skip-browser-warning', true);
        // return $next($request);
        
        // $response = $next($request);
        // return $request->header('ngrok-skip-browser-warning', true);


        $response = $next($request);

        // $response->headers->set('ngrok-skip-browser-warning', '123');
        $response->headers->set('ngrok-skip-browser-warning', '123');

        return $response;
        // return $response;

    }
}
