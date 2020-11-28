<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
class Authenticate extends Middleware
{
    public function handle($request, Closure $next)
    {
        if (!$request->session()->has('user_logon')) {
            return redirect('/');
        }
        return $next($request);
    }
}
