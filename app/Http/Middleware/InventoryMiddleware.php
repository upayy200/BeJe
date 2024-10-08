<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class InventoryMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $x_api_key = $request->x_api_key;
        $key_source = $request->key_source;

        if($x_api_key == '123' && $key_source == 'inventory') {
            return $next($request);
        } else {
            return response(['status' => 'error', 'message' => 'Autentikasi Gagal', 'data' => []], 419);
        }
    }
}
