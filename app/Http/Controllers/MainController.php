<?php

namespace App\Http\Controllers;

use App\Models\MainPageConfig;
use App\Models\MainPageTeamSection;
use App\Models\Post;
use App\Models\PostsCategories;
use Illuminate\Support\Facades\Cache;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class MainController extends Controller
{
    public function index()
    {
        $team = MainPageTeamSection::all();
        $contents = MainPageConfig::query()->get();
        $blog = Post::query()->orderBy('created_at', 'desc')->get()->take(3);
        $news = PostsCategories::query()->where('name_en','=','News')->with('posts')->get()->first();
        $news = $news->posts->take(3);
        $mostViewed = Post::query()->orderBy('view', 'desc')->get()->take(3);
//        dd($news);
        return view('site.pages.home', ['contents' => $contents, 'team' => $team, 'mostViewed' => $mostViewed, 'news' => $news, 'blog' => $blog]);
    }

    public function indexSetLocale($locale = null): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application|NotFoundHttpException
    {
        if (isset($locale) && in_array($locale, config('app.available_locales'))) {
            $key = auth()->guard(config('nova.guard'))->id() . '.locale';
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
        $key = auth()->guard(config('nova.guard'))->id() . '.locale';
        app()->setLocale($locale);
        session()->put('locale', $locale);
        cookie()->queue('locale', $locale, 120);
        Cache::forever($key, $locale);
        return redirect()->back();
    }
}
