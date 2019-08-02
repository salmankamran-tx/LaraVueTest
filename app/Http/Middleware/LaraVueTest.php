<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class LaraVueTest
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
        // $user_id = Auth::id();
        // $user_name = User::find($user_id)->name;
        // echo $user_name;

        return $next($request);
    }
}
