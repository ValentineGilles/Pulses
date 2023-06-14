<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ArtistMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
{
    // Vérifier si l'utilisateur est un artiste
    if (!auth()->check() || !auth()->user()->is_artist) {
        return redirect()->route('home');
    }
    

    return $next($request);
}

}
