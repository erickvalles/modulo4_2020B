<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DeshabilitaDeleteCategorias
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->method() === 'DELETE'){
            return response("Método deshabilitado",405);
        }
        $response = $next($request);

        //podemos decorar la respuesta
        return $response;
    }
}
