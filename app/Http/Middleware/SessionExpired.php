<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Carbon\Carbon;

class SessionExpired
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $lastActivity = session('lastActivityTime');
            $now = Carbon::now();

            if ($lastActivity && $now->diffInMinutes($lastActivity) > config('session.lifetime')) {
                Auth::logout();
                return redirect('/')->withErrors('Sesi Anda telah berakhir. Harap login kembali');
            }

            session(['lastActivityTime' => $now]);
        }

        return $next($request);
    }
}
