<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class SuperAdminRoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!empty(Auth::user()->role) && Auth::user()->role == "super_admin")
        {
            return $next($request);
        }
        else if(empty(Auth::user()))
        {
            return redirect("login");
        }

        return response()->json("Please Login Again as Super Admin Thanks!");
    }
}
