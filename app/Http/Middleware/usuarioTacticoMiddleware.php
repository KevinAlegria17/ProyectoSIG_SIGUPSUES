<?php

namespace App\Http\Middleware;

use Closure;

class usuarioTacticoMiddleware
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
        if(Auth::user()){
       foreach (Auth::user()->rol as $role) {
         if ($role->nombre=='tactico'){
         return $next($request);
         }
       }
   }
       abort(403);
     }
    }
}
