<?php namespace estoque\Http\Middleware;

use Closure;
use Auth;

class AutorizacaoMiddleware {

	public function handle($request, Closure $next){
		if(!$request->is('/auth/login') && Auth::guest()){
        	return redirect('/auth/login');
    	}
		return $next($request);
	}

}
