<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MainController extends Controller
{
    public function index()
    {

        return view('site.pages.home');

    }

    public function indexSetLocale($locale = null): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|NotFoundHttpException
    {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            $key = auth()->guard(config('nova.guard'))->id().'.locale';
            app()->setLocale($locale);
            session()->put('locale', $locale);
            cookie()->queue('locale', $locale, 120);
            Cache::forever($key, $locale);

            return view('site.pages.home');
        } else {
            throw new NotFoundHttpException();
        }

    }

    public function indexChangeLocale($locale): \Illuminate\Http\RedirectResponse|NotFoundHttpException
    {
        $key = auth()->guard(config('nova.guard'))->id().'.locale';
        app()->setLocale($locale);
        session()->put('locale', $locale);
        cookie()->queue('locale', $locale, 120);
        Cache::forever($key, $locale);
        return redirect()->back();
    }
}
