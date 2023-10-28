<?php

namespace App\Http\Middleware;

use App\Models\ViewedGalleries;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class GalleriesViewed
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $minNumberViewed = 5;
        $galleriesViewed = ViewedGalleries::all();
        foreach ($galleriesViewed as $galleries)
            if (auth()->check()){
                $numberViewed = auth()->user()->viewedGalleries->count();

                if ($numberViewed >= $minNumberViewed || auth()->User()->role === 1){
                    return $next($request);
                } else {
                    return redirect()->back()->with('status', 'U moet minimaal ' . $minNumberViewed . ' gallerijen bekijken voordat u een nieuwe gallerij kunt aanmaken.');
                }
            }
        return redirect('/login');
    }
}
