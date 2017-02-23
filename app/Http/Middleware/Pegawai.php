<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Penggajian;
class Pegawai
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
        $Penggajian=Penggajian::all();
        if (auth()->check() && $request->user()->permession=='Pegawai') {
            return redirect()($request);
        }
        else{
      
        return redirect()->guest('/akses');
       }
    }
}
