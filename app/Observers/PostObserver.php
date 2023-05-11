<?php

namespace App\Observers;

use App\Models\Post;
use App\Models\PostCategories;

class PostObserver
{
    /**
     * Handle the Post "created" event.
     */
    public function creating(Post $post): void
    {
        $post->created_by = auth()->user()->id;
        $post->updated_by = auth()->user()->id;
    }

    public function created(Post $post)
    {
        PostCategories::query()->create([
            'post_id' => $post->id,
            'category_id' => 1
        ]);
    }

    /**
     * Handle the Post "updated" event.
     */
    public function updating(Post $post): void
    {
        $post->updated_by = auth()->user()->id;
    }

    /**
     * Handle the Post "deleted" event.
     */
    public function deleted(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "restored" event.
     */
    public function restored(Post $post): void
    {
        //
    }

    /**
     * Handle the Post "force deleted" event.
     */
    public function forceDeleted(Post $post): void
    {
        //
    }
}
