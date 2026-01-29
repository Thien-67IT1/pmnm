<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    /**
     * Xử lý yêu cầu đến.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $age = $request->session()->get('age');

        if (!is_numeric($age) || (int) $age < 18) {
            return response('Truy cập bị từ chối', 403);
        }

        return $next($request);
    }
}
