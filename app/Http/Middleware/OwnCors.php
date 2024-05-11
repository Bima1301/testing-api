<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class OwnCors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {

        $allowedOrigins = ['http://localhost:5173/'];

        if ($request->server('HTTP_ORIGIN')) {
            if (in_array($request->server('HTTP_ORIGIN'), $allowedOrigins)) {
                return $next($request)
                    ->header('Access-Control-Allow-Origin', $request->server('HTTP_ORIGIN'))
                    ->header('Access-Control-Allow-Origin', '*')
                    ->header('Access-Control-Allow-Methods', 'POST, GET, OPTIONS, PUT, DELETE')
                    ->header('Access-Control-Allow-Headers', '*');
            }
        }


        return $next($request);
    }
}
