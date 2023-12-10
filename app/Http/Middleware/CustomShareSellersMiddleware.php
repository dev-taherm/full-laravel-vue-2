<?php 

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class CustomShareSellersMiddleware
{
    public function handle($request, Closure $next)
    {
        $user = Auth::user();
        $sellers = $user ? $user->sellers : null;
        
        Inertia::share([
            'sellers' => $sellers,
        ]);
        
        return $next($request);
    }
}