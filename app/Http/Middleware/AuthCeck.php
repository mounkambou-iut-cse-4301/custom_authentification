<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthCeck
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
        if(!session()->has('LoggedUser') && ($request->path() !='auth.login' && $request->path() !='auth.register')){
            return redirect('auth.login')->with('fail',"You must be logged in");
        }
        if(session()->has('LoggedUser') && ($request->path() !='auth.login' || $request->path() !='auth.register')){
            return back();
        }
        return $next($request);
    }
}
