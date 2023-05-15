<?php

namespace Modules\Multiregional;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class MultiregionalMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->getPathInfo() === '/' && Cookie::has('multiregional')) {
            $region = Cookie::get('multiregional');
            return redirect(route('multiregional', $region));
        }

        if ($request->region) {
            if (!Region::all()->pluck('en')->contains($request->region)) {
                return redirect('/');
            }
            Cookie::queue('multiregional', $request->region);
        }
        
        return $next($request);
    }
}
