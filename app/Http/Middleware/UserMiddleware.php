<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // Verificar si el usuario está autenticado y tiene el rol de administrador (ID_rol == 1)
        if ($request->session()->has('ID_rol') && $request->session()->get('ID_rol') == 2) {
            // Realiza la lógica que necesites aquí
            return $next($request);
        }

        // Si el usuario no es un administrador, retornar un error 403
        abort(403, 'Acceso no autorizado.');
    }
}
