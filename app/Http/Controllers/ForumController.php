<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\ForumComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Validation\ValidationException;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ForumController extends Controller
{
    public function forum(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {

        $forums = Forum::query()
            ->orderBy('created_at', 'desc')
            ->paginate(10, ['*'], 'page', $request->get('page') ?? 1);
        $topForums = Forum::query()->orderBy('view', 'desc')->get()->take(5);
        $lastPage = $forums->lastPage();

        return view('site.pages.forum', ['topForums' => $topForums, 'forums' => $forums, 'pageCount' => $lastPage]);
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

        $comments = ForumComment::query()->where('question_id', $forum->id)->paginate(10, ['*'], 'page', $request->get('page') ?? 1);

        return view('site.pages.forum-item', ['forum' => $forum, 'comments' => $comments, 'replyComment' => null]);
    }

    public function createForum(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('site.pages.add-forum');
    }

    public function insertForm(Request $request)//: \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
//        dd('dsds');
        try {
            $this->validate($request, [
                'title' => 'required|string|min:5',
                'description' => 'required|string'
            ]);

            $forum = new Forum();
            $forum->title_question = $request->title;
            $forum->description_question = $request->description;
            $forum->slug = str_replace(' ', '_', $request->title);
            $forum->client_id = auth()->user()->id;

            $forum->save();

            return redirect()->to('/forum');
        } catch (ValidationException $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    public function createForumComment(Request $request)
    {
        $forum = Forum::query()->where('slug', $request->get('slug'))->get()->first();
        $replyComment = ForumComment::query()->find($request->get('_id'));
        $comments = ForumComment::query()->where('question_id', $forum->id)->paginate(10, ['*'], 'page', $request->get('page') ?? 1);
        Cache::set('view_forums' . $request->userAgent(), $forum->id, 3600);
        return view('site.pages.forum-item', ['forum' => $forum, 'comments' => $comments, 'replyComment' => $replyComment]);
    }

    public function storeForumComment(Request $request)
    {
        try {
            $request->validate([
                'message' => 'required|string',
                '_id' => 'string'
            ]);
            ForumComment::query()->create([
                'message' => $request['message'],
                'question_id' => Cache::get('view_forums' . $request->userAgent()),
                'client_id' => auth()->user()->id,
                'parent_id' => $request['_id'] ?? null
            ]);
            return redirect($request['slug'] ? 'forum/' . $request['slug'] : url()->previous())->with('success', 'comment create');
        } catch (ValidationException $exception) {
            return redirect()->back()->with(['error' => $exception->getMessage()]);
        }
    }

    /**
     * @param Request $request
     * @return void
     */
    public function like(Request $request): void
    {
        $comment = ForumComment::query()->find($request['_id']);
        ++$comment->like;
        $comment->save();
    }

    /**
     * @param Request $request
     * @return void
     */
    public function dislike(Request $request): void
    {
        $comment = ForumComment::query()->find($request['_id']);
        ++$comment->dislike;
        $comment->save();
    }

    public function insi()
    {
        $r = ForumComment::query()->with(['children'])->get();
        dd($r[1]->children);
    }
}
