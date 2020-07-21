<?php

namespace App\Http\Middleware;

use Closure;

class isEmployer
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
        if (($request->session()->get('isLogin') != 'employ')) {
            return redirect('/sign-in/employer');
        }

        return $next($request);
    }
}
