<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        $role = explode('|', $role);

        if (!($request->user() && $request->user()->hasRoleById($role)))
        {
            return redirect('login');
        }

        return $next($request);
    }
}
