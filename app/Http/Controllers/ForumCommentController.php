<?php

namespace App\Http\Controllers;

use App\Models\ForumComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class ForumCommentController extends Controller
{
    public function like(Request $request)
    {
        dd($request);
        return 'ok';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function dislike(Request $request)
    {
        dd($request);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
        ]);
        ForumComment::query()->create([
            'message' => $request->get('message'),
            'question_id' => Cache::get('view_forums' . $request->userAgent()),
            'client_id' => auth()->user()->id,
        ]);

        return redirect(url()->previous())->with('success', 'comment create');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $data = $request->validate([
            '_id' => 'required|string',
            'message' => 'required|string'
        ]);

        $parentCommentId = $data['_id'];
        $message = $data['message'];

        ForumComment::query()->create([
            'message' => $message,
            'question_id' => Cache::get('view_forums' . $request->userAgent()),
            'client_id' => auth()->user()->id,
            'parent_id' => $parentCommentId
        ]);

        return redirect(url()->previous())->with('success', 'comment create');
    }

    /**
     * Display the specified resource.
     */
    public function show(ForumComment $forumComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ForumComment $forumComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ForumComment $forumComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ForumComment $forumComment)
    {
        //
    }
}
