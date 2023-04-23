<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Laravel\Nova\Nova;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cache;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response) $next
     * @return Response
     */
    public function handle(Request $request, Closure $next): Response
    {
        $lang = Cache::get(auth()->guard(config('nova.guard'))->id() . '.locale');
        if ($lang) {
            app()->setLocale(strtolower($lang));
            if (in_array($lang, config('nova-language-switch.rtl-languages'), true)) {
                Nova::enableRTL();
            }
        }

//        if (Session::has('locale')) {
//            App::setLocale(Session::get('locale'));
//        } elseif ($request->hasCookie('locale')) {
//            App::setLocale($request->cookie('locale'));
//        }
//
//        if (!$request->hasCookie('locale')) {
//            Cookie::queue('locale', 'en', 120);
//        }

        return $next($request);
    }
}
