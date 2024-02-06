<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class AuthenticateApi extends Middleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @param string[] ...$guards
     * @return mixed
     *
     * @throws \Illuminate\Auth\AuthenticationException
     */
    public function handle($request, Closure $next, ...$guards)
    {
        if (!$request->expectsJson()) {
            return response()->json(['message' => 'Accept: application/json required'], 406);
        }

        $this->authenticate($request, $guards);

        return $next($request);
    }
}
