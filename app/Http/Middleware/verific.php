<?php
namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Closure;
class verific
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
        
        if ( !auth()->guard('users')->check() )
            return redirect()->route('login');
        else{
            $user = auth()->guard('users');
            return $next($request);
        }
        
       
    }
}

