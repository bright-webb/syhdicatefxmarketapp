<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if($request->session()->has('user')){
            return $next($request);

        }
        else{
            // log user out and redirect to login page with cookie
            $request->session()->flush();
            $request->session()->regenerate();
            $cookie = $request->cookie('user');

            $url = $_SERVER['REQUEST_URI'];

            return redirect('/login')->with('id', $cookie);
        }


    }
}
