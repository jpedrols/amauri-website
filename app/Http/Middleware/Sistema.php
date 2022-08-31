<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Sistema
{
    public function handle(Request $request, Closure $next)
    {
        if(session()->get("usuario")){
            return $next($request);
        }else{
            return redirect()->route("sistema.login");
        }
    }
}
