<?php

namespace App\Http\Middleware;

use App\Role;
use Closure;
use Illuminate\Support\Facades\Auth;

class AuthAdmin
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

        if((Auth::check() && Auth::user()->isAdmin() && Auth::user()->isVerified()) or (Auth::check() && Auth::user()->isWorker() && Auth::user()->isVerified())){
            return $next($request);
        }
        abort(404);
    }
}
