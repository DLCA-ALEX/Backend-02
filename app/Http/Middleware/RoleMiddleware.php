<?php
// RoleMiddleware.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Verificar si el usuario está autenticado y tiene el rol adecuado
        if ($request->user() && in_array($request->user()->ID_rol, $roles)) {
            return $next($request);
        }

        // Si el usuario no tiene el rol adecuado, redirigir a la página anterior
        return redirect()->route('login')->withErrors(['error' => 'Acceso no autorizado.']);
    }
}
