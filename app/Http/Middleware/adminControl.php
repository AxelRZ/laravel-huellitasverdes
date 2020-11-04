<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


class adminControl
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $level_required = 1)
    {

        $user = $request->user();

        if(Auth::check() && (Auth::user()->getAccessLevel() >= (int)$level_required)){
            return $next($request);
        }

        if($user != null && $user->isAdmin()){
            return $next($request);

        }else{
            return redirect('/')->with('No tienes los permisos :C');
        }
    }
}
