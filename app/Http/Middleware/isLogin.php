<?php

namespace App\Http\Middleware;

use Closure;

class isLogin
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
        if (($request->session()->get('isLogin') != 'login')) {
            return redirect('/candidate/login');
        }

        return $next($request);
    }
}
