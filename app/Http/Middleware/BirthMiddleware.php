<?php

namespace App\Http\Middleware;

use Closure;

class BirthMiddleware
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

         $birth='31st of March 1964';

        echo "My birthday is: ".$birth;


        return $next($request);
    }
}
