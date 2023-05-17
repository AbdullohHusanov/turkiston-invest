<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostCategories;
use App\Models\PostComments;
use App\Models\PostsCategories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BlogController extends Controller
{
    public function blog(Request $request)
    {
        $cat = 'all';
//        dd($request->get('page'));
        if (!$request->has('category')) {
            return redirect()->to('/blog?category=all');
        }
        if ($request->has('page')) {
            url()->previous() . $request->getRequestUri();
        }
        $category_in = $request->get('category');

        $category = PostsCategories::query()
            ->orWhere('name_uz', '=', $category_in)
            ->orWhere('name_ru', '=', $category_in)
            ->orWhere('name_en', '=', $category_in)->get()->first();

        if ($category === null) {
            return redirect()->to('/blog?category=all');
        }else{
            $cat = $category_in;
        }

//        dd($request->getRequestUri());
        $categories = PostsCategories::all();
        $topPosts = Post::query()->orderBy('view', 'desc')->get()->take(5);
        $posts_ids = PostCategories::query()->where('category_id', $category->id)->get('post_id');
        $posts = Post::query()->whereIn('id', $posts_ids)->paginate(10, ['*'], 'page', $request->get('page') ?? 1);
        return view('site.pages.blog', ['categories' => $categories, 'posts' => $posts, 'topPosts' => $topPosts,'selected_category' => $cat]);
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
        return view('site.pages.blog-item', ['post' => $post, 'comments' => $commentsPage ?? null, 'pagesCount' => $commentsPage->lastPage()]);
    }

    public function storeComment(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);
        PostComments::query()->create([
            'message' => $request->get('message'),
            'post_id' => Cache::get('view_posts' . $request->userAgent()),
            'client_id' => auth()->user()->id,
        ]);

        return redirect(url()->previous())->with('success', 'comment create');
    }

    /**
     * @param Request $request
     * @return void
     */
    public function like(Request $request): void
    {
        $comment = PostComments::query()->find($request['_id']);
        ++$comment->like;
        $comment->save();
    }

    /**
     * @param Request $request
     * @return void
     */
    public function dislike(Request $request): void
    {
        $comment = PostComments::query()->find($request['_id']);
        ++$comment->like;
        $comment->save();
    }

}
