<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;  

use Closure;

class UserMiddleware
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
        if(Auth::check() && Auth::user()->isban)
        {
            $banned = Auth::user()->isban == "1";
            Auth::logout();

            if($banned == 1){
                $message = 'your account has been banned';

            }
            return redirect()->route('login')
            ->with('status',$message)
            ->withErrors(['email'=>'your account has been banned plz    contact administrator']);
                }
            if(auth::check())
            {
                $expiresAt = Carbon::now()->addMinutes(1);
                Cache::put('user is online' . Auth::user()->id,true,$expiresAt);
            }    


                 return $next($request);   
            }


    }

