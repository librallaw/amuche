<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class CheckCac
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

//        if (Session::get('user')[0]["level"] == 2) {
//
//            if (Session::get('user')[0]["cac_details"] == 0) {
//                //  session()->put('url.intended', url()->current());
//                return Redirect::route("showCac")->with("message", "Your CAC details needs to be approved before you can continue")->with("type", "warning");
//            }
//        }


        return $next($request);
    }
}
