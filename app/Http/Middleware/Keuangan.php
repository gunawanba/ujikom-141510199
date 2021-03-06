<?php

namespace App\Http\Middleware;

use Closure;

class Keuangan
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
        if (auth()->check() && $request->user()->permession=='Admin') {
            return $next($request);
        }
        else if (auth()->check() && $request->user()->permession=='Keuangan') {
            return $next($request);
        }
        else{
      
        return redirect()->guest('/akses');
       }
    }
}
