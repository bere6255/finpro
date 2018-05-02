<?php

namespace DaraWorks\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfBaod
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */
	public function handle($request, Closure $next, $guard = 'baod')
	{
	    if (Auth::guard($guard)->check()) {
	        return redirect('baod/home');
	    }

	    return $next($request);
	}
}