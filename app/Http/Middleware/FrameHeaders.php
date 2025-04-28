<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class FrameHeaders
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        
        // Allow iframe from any origin (be careful)
        $response->headers->remove('X-Frame-Options');
        $response->headers->set('X-Frame-Options', 'ALLOWALL');

        return $response;
    }
}
