<?php
 
namespace App\Http\Middleware;
 
use Closure;
use Illuminate\Support\Facades\Auth;
 
class AuthAdministrator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
         
                if ( Auth::check() && Auth::user()->isAdmin() )
                    {
                    return $next($request);
                    }
                return redirect('/home');//????????? Admin ??? Redirect ????? URL ???
 /*
                if (Auth::user()){
                    if(Auth::user()->isAdmin  == "1"){
                        return $next($request); 
                    }else{
                        Auth::logout();
                        return redirect()->route('usergp.login');
                   }
               }
                return redirect()->route('usergp.login'); */
           
        
    }
}