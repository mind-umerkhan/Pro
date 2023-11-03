<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        
    }



    // public function handle($request, Closure $next)
    // {
    //     if (auth()->check() && auth()->user()->role == 1) {
    //         $data = [
    //             "role" => auth()->user()->role,
    //             "route_prefix" => "admin",
    //             "user" => auth()->user()
    //         ];
    //         view()->share("_logged_user", $data);
    //         return $next($request);
    //     }
    //     auth()->logout();
    //     return redirect('/?q=amw');
    // }
}
