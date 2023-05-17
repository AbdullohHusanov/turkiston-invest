<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function repost(Request $request, $slug = null): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $page = $slug === null ? null : Page::query()->where('slug', $slug)->get()->first();
        $allPages = Page::query()->orderBy('id','desc')->get();
        return view('site.pages.repost', ['currentPage' => $page, 'allPages' => $allPages]);
    }

    public function repostFilter(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $year = (+(substr($request['year'], 0,4)))+1 . '-01-01 00:00:00';

        $pages = Page::query()->where('created_at', '>', $request['year'])->where('created_at', '<', $year)->get() ?? null;
//        dd($pages);
        return view('site.pages.repost', ['currentPage' => $pages[0] ?? null, 'allPages' => $pages ?? null]);
    }
}
