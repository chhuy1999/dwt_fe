<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleAuthorization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        //get current user in session
        $user = session()->get('user');
        if (!$user) {
            return redirect('/login');
        }
        //get current token in session
        $token = session()->get('token');
        if (!$token) {
            return redirect('/login');
        }
        //get user role
        $role = $user['role'];
        if (!$role) {
            return redirect('/login');
        }
        // admin can do everything
        if ($role == 'admin') {
            return $next($request);
        }
        //check if user role is in the list of roles
        if ($user && in_array($role, $roles)) {
            return $next($request);
        }
        //if not, redirect to login page
        return redirect('/login');
    }
}
