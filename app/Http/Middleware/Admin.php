<?php

namespace App\Http\Middleware;

use Illuminate\Support\MessageBag;
use Auth;
use Closure;

class Admin
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
        if (! Auth::check() ) {
            $errors = new MessageBag(['error' => ['You do not have permission to access that url please login first.']]); 
            return redirect()->route('cms.index')->withErrors($errors);  
        }

        return $next($request);
    }
}
