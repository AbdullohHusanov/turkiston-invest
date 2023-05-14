<?php

namespace App\Http\Controllers;

use App\Models\PostComments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostCommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function like(Request $request)
    {
        dd('ok');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function dislike(Request $request)
    {
        dd('no');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
     * Display the specified resource.
     */
    public function show(PostComments $postComments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PostComments $postComments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PostComments $postComments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PostComments $postComments)
    {
        //
    }
}
