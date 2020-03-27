<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if (isset($user)) {
            if ($user->admin == 'yes') {
                return $next($request);
            } elseif ($user->admin == 'no') {
                return redirect()->route('index');
            }
        }
        return redirect()->route('index');
    }
}
