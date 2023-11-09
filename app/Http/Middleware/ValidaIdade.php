<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidaIdade
{
    /**
     * Handle an incoming request.
     *
     * @param Request: $request
     * @param Closure(): void $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->VIdade <= 18) {
            return (redirect('contactos'));
        }
        return $next($request);
    }
}
