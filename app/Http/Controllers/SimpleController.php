<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\ForumComment;
use App\Models\Page;
use App\Models\Post;
use App\Models\PostComments;
use App\Models\PostsCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SimpleController extends Controller
{
    public function index(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('site.pages.simple');
    }

    public function repost(Request $request, $slug = null): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $page = Page::query()->where('slug',$slug)->get()->first();
        $allPages = Page::all();
//        dd($page->createdBy->name);
        return view('site.pages.repost', ['currentPage' => $page, 'allPages' => $allPages]);
    }
    public function repostFilter(Request $request, $year)
    {
        dd('ok');
//        $page = Page::query()->where('created_at', '>=',$year)->get();
//        $allPages = Page::all();
//        dd($page);
//        return view('site.pages.repost', ['currentPage' => $page, 'allPages' => $allPages]);
    }

    public function blog(Request $request)
    {
        if (!$request->has('category')) {
            return redirect()->to('/blog?category=all');
        }
        $category_in = $request->get('category');

        $category = PostsCategories::query()
            ->orWhere('name_uz', '=', $category_in)
            ->orWhere('name_ru', '=', $category_in)
            ->orWhere('name_en', '=', $category_in)->get()->first();

        if ($category === null) {
            return redirect()->to('/blog?category=all');
        }

        $posts = $category->posts;
//        $allPost = Post::query()->paginate(10, ['*'], 'page', $request['page'] ?? 1);
        $categories = PostsCategories::all();

        return view('site.pages.blog', ['categories' => $categories, 'posts' => $posts, 'pagesCount' => 3/*$allPost->lastPage()*/]);
    }

    public function blogItem(Request $request, $slug)//: \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $post = Post::query()->where('slug', '=', $slug)->get()->first();

        if ($post === null) {
            return throw new NotFoundHttpException();
        }

        // add count view
        try {
            $cc = Cache::get('view_posts' . $request->userAgent());

            if ($cc === null || $cc !== $post->id) {
                Cache::set('view_posts' . $request->userAgent(), $post->id, 3600);
                $post->view = $post->view + 1;
                $post->save();
            }
        } catch (NotFoundExceptionInterface|ContainerExceptionInterface $e) {
            Cache::set('view_posts' . $request->userAgent(), $post->id, 3600);

            $post->view = $post->view + 1;
            $post->save();
        }

        if (!$request->has('page')) {
            return redirect()->to('blog/' . $slug . '?page=1');
        }

        $commentsPage = PostComments::query()->where('post_id', $post->id)->paginate(10, '*', '', $request->get('page') ?? 1);
        return view('site.pages.blog-item', ['post' => $post, 'comments' => $commentsPage ?? null, 'pageCount' => $commentsPage->lastPage()]);
    }

    public function forum(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $forums = Forum::query()->paginate(10,['*'],'forum',$request->get('page') ?? 1);
        $topForums = Forum::query()->orderBy('view', 'desc')->get()->take(5);
        $lastPage = $forums->lastPage();
        $forums = $forums->items() == [] ? null : $forums;
        return view('site.pages.forum', ['topForums' => $topForums,'forums' => $forums, 'pageCount'=> $lastPage]);
    }

    public function forumItem(Request $request, $slug): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $forum = Forum::query()->where('slug', $slug)->get()->first();

        // add count view
        try {
            $cc = Cache::get('view_forums' . $request->userAgent());

            if ($cc === null || $cc !== $forum->id) {
                Cache::set('view_forums' . $request->userAgent(), $forum->id, 3600);
                $forum->view = $forum->view + 1;
                $forum->save();
            }
        } catch (NotFoundExceptionInterface|ContainerExceptionInterface $e) {
            Cache::set('view_forums' . $request->userAgent(), $forum->id, 3600);

            $forum->view = $forum->view + 1;
            $forum->save();
        }

        $comments = ForumComment::query()->paginate(10, ['*'], 'page', $request->get('page') ?? 1);

        return view('site.pages.forum-item', ['forum' => $forum, 'comments' => $comments, 'pageCount' => $comments->lastPage()]);
    }
}
