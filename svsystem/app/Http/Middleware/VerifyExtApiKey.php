<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifyExtApiKey
{
    public function handle(Request $request, Closure $next): Response
    {
        $apikey = config('app.ext_api_key');

        $apiKeyIsValid = (
            ! empty($apikey)
            && $request->header('x-api-key') == $apikey
        );

        abort_if (! $apiKeyIsValid, 403, 'Access Denied');
        
        return $next($request);
    }
}
