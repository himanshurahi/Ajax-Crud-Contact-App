<?php

namespace App\Http\Middleware;

use Closure;

class AjaxContactCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (!$request->ajax()) {
            abort(403, 'You Can\'t Access this Page Directly');
        }

        return $next($request);
    }
}
