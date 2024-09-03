<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $role): Response {

        // Continue if role matches
        if (Auth::check() && Auth::user()->role === $role) {
            return $next($request);
        }

        // otherwise return 403
        if($request->expectsJson()){
            return response()->json(['message' => 'Unauthorized.'], 403);
        }
        return abort(403, 'Unauthorized.');
    }
}
