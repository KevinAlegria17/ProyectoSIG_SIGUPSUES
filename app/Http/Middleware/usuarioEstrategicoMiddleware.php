<?php

namespace App\Http\Middleware;

use Closure;

class usuarioEstrategicoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);if(Auth::user()){
       foreach (Auth::user()->rol as $role) {
         if ($role->nombre=='estrategico'){
         return $next($request);
         }
       }
   }
       abort(403);
     }
    }
}
