<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {

        // 👇 Bypass middleware for logout route
        if ($request->is('logout')) {
            return $next($request);
        }

        if (!Auth::check()) {
            return redirect('/login');
        }

        // Check if the user has the given role
        if (Auth::user()->role && in_array(Auth::user()->role->name, $roles)) {

            return $next($request);
        }

        // If not, abort with a 403 Unauthorized error
        return abort(403, 'Unauthorized');
    }
}
