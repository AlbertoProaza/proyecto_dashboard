<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPermission
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, string $permission): Response
    {
        $user = auth()->user();

        // Si no está autenticado, redirigir al login
        if (!$user) {
            return redirect()->route('login');
        }

        // Si es admin, permitir todo
        if ($user->hasRole('admin')) {
            return $next($request);
        }

        // Verificar permiso específico
        if (!$user->can($permission)) {
            abort(403, 'No tienes permisos para acceder a esta sección');
        }

        return $next($request);
    }
}
