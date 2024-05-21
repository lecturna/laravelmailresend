<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Middleware;
use Symfony\Component\HttpFoundation\Response;

class TrustProxies extends Middleware
{
     /**
     * The trusted proxies for this application.
     *
     * @var array|string
     */
    protected $proxies = '*';

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers = Request::HEADER_X_FORWARDED_FOR | Request::HEADER_X_FORWARDED_HOST | Request::HEADER_X_FORWARDED_PORT | Request::HEADER_X_FORWARDED_PROTO;

    /**
     * Determine if the request is coming from a trusted proxy.
     *
     * @param \Illuminate\Http\Request $request
     * @return bool
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! $this->isTrustedProxy($request)) {
            // Handle untrusted proxy requests
            // e.g., log the request or deny access
        }
        return $next($request);
    }
}
