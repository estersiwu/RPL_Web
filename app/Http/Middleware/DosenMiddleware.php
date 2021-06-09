<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class DosenMiddleware
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
        if(Auth::user()->role == 'dosen')
        {
            return $next($request);
        }
        else
        {
            return redirect('/dashboard-dosen')->with('status','Anda tidak dapat mengakses Dashboard ini');
        }
    }
}
