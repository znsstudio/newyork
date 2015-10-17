<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class VerifyAgent
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

        $agent = md5($_SERVER['HTTP_USER_AGENT']);

        if (Auth::user()) {
            if ( Auth::user()->last_agent!=$agent ){ 
                Auth::logout();
                return redirect('/auth/login');
            }
        }

        return $next($request);
    }
}
