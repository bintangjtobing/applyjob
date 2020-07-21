<?php

namespace App\Http\Middleware;

use Closure;

class isCandidates
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
        if (($request->session()->get('isLogin') != 'candidate')) {
            return redirect('/candidate/login');
        }

        return $next($request);
    }
}
