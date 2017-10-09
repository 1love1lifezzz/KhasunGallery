<?php

namespace App\Http\Middleware;

use Closure;

class Locale
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
        if(session()->has('locale')){
            app()->setLocale(session()->get('locale'));
        }else{
            session()->put('locale', config()->get('app.locale'));
        }
        return $next($request);
    }
}
