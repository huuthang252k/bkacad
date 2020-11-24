<?php

namespace App\Http\Middleware;

use Closure;

class bka_middleware
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
        if($request->session()->has('email')){
            return $next($request);
        }
        return redirect()->route('login')->with('error','Chưa đăng nhập');
    }
}
