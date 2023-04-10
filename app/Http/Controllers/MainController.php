<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){

        return view('site.pages.home');

    }

    public function indexSetLocale($locale = null): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        if (isset($locale) && in_array($locale, config('app.available_locales') ) ){
            app()->setLocale($locale);
        }

        return view('site.pages.home');
    }

    public function indexChangeLocale($locale): \Illuminate\Http\RedirectResponse
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
