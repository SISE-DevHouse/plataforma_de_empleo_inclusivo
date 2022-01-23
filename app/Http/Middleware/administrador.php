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
            /*este primer if es para continuar con las rutas de los que tienen el roll empresa*/
            if (auth()->user()->role == 'admin') {
                return $next($request);
            } else {
                /*este lo mandara a registrarse como empresa para poder acceder*/
                return redirect()->to('/');
            }
            /*aca se puede agregar uno que tenga los dos roles pero eso se revisa a detalle*/
        }



        return $next($request);
    }
}
