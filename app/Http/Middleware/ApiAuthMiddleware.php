<?php

namespace App\Http\Middleware;

use App\Models\ApiKey;
use Closure;
use Illuminate\Http\Request;

class ApiAuthMiddleware
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

        $check_key = ApiKey::where('key', $x_api_key)->first();

        if(!empty($check_key)) {
            return $next($request);
        } else {
            return response(['status' => 'error', 'message' => 'Autentikasi Gagal', 'data' => []], 419);
        }
    }
}
