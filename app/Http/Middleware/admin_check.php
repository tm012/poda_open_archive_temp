<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class admin_check
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
        //$email = Auth::user()->email;
        //https://stackoverflow.com/questions/17835886/laravel-authuser-id-trying-to-get-a-property-of-a-non-object
        if (Auth::user()->admin_status == "1")
        {
            // The user is logged in...
            return $next($request);
        }
        else{
            return redirect('/');
        }

    }
}