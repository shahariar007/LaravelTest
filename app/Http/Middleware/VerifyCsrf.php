<?php
/**
 * Created by PhpStorm.
 * User: Mortuza
 * Date: 2/24/2016
 * Time: 3:01 PM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Session\TokenMismatchException;

class VerifyCsrf extends VerifyCsrfToken
{
    public function handle($request, Closure $next)
    {
        if ($this->isReading($request) || $this->excludedRoutes($request) || $this->tokensMatch($request)) {
            return $this->addCookieToResponse($request, $next($request));
        }

        throw new TokenMismatchException;
    }

    protected function excludedRoutes($request)
    {
        $routes = [
            'login',
            'registration',
            'verification',
            'authentication',
            'applogout'
        ];

        foreach ($routes as $route)
            if ($request->is($route))
                return true;

        return false;
    }
}