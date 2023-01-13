<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class Creator
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

        //dd(Session::get('user')[0]["level"]);

        if (Auth::user()->level ==1 || Auth::user()->level ==2) {


        }else{

            Session::flush();
            return Redirect::to("/login");
        }

        return $next($request);
    }
}
