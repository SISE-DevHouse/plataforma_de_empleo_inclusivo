<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class administrador
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            /* si es diferente */
            if (auth()->user()->role <> 'administrador') {
                return $next($request);
            } else {
                return redirect()->to('/empresas');
                /* return $next($request); */
            }
        }



        return $next($request);
    }
}
