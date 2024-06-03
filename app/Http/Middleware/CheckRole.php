<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    // Maneja la solicitud entrante
    public function handle(Request $request, Closure $next, $role)
    {
        // Verifica si el usuario está autenticado y si su rol no es 'Admin'
        if ($request->user() && $request->user()->rol !== 'Admin') {
            // Redirige al usuario a la ruta '/dashboard' si no tiene el rol adecuado
            return redirect('/dashboard');
        }

        // Permite que la solicitud continúe
        return $next($request);
    }
}
