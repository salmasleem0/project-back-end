<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
       
        $check = Auth::user()->role;
       if($check==0){
        return redirect()->route('dashboard');
       }
       elseif($check==1){
       return redirect()->route('user');   
       }
   elseif($check==2){
    return redirect()->route('modirator');
   }
        return $next($request);
    }
}
