<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogincheckMidleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $login = $request->session()->has('token');
        if ($login == true) {
            return $next($request);
        } else {
            return redirect('/'); //home page jabe  ar onopage gale onno url dite hobe
        }
    }
}
