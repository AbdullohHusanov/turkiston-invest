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

    public function repostFilter(Request $request)
    {
        dd($request);
    }
}
