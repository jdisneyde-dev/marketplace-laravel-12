<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class User
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //para fazer a filtragem do nosso admin
        //Agora para fazer ele funcionar vamos trabalhar ele na pasta booststrap (app.php)
        if(Auth::user()->role != 'user'){
            return redirect('/');

        }
        return $next($request);
    }
}
