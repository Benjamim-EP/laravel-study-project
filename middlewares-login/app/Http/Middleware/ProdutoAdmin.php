<?php

namespace App\Http\Middleware;

use Closure;

class ProdutoAdmin
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
        if($request->session()->exists('login')){
            $login = $request->session()->get('login');
            if($login['user'] != 'joao'){
                return redirect('/negado');
            }
        }
        else{
            return redirect()->route('negado');
        }
        return $next($request);
    }
}
