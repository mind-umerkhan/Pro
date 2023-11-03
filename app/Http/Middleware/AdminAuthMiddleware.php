<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->role_id == 1) {
            $data = [
                'role_id' => auth()->user()->role_id,
                'user' => auth()->user(),
            ];
            view()->share('logged_user', $data);
            return $next($request);
        }
        // auth()->logout();
        return redirect('/?q=amw');
    }
}
