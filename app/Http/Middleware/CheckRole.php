<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if ($request->user() && $request->user()->rol !== 'Admin') {
            return redirect('/dashboard');
        }

        return $next($request);
    }
}
