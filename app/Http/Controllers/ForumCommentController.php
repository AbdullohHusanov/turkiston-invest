<?php

namespace App\Http\Controllers;

use App\Models\ForumComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Validation\ValidationException;

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

            return redirect(url()->previous())->with('success', 'comment create');
        } catch (ValidationException $exception) {
            return redirect()->back()->with(['error' => $exception->getMessage()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            '_id' => 'required|string',
            'message' => 'required|string'
        ]);

        ForumComment::query()->create([
            'message' => $request['message'],
            'question_id' => Cache::get('view_forums' . $request->userAgent()),
            'client_id' => auth()->user()->id,
            'parent_id' => $request['_id']
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
