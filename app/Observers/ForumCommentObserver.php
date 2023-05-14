<?php

namespace App\Observers;

use App\Models\ForumComment;

class ForumCommentObserver
{
    /**
     * Handle the ForumComment "created" event.
     */
    public function creating(ForumComment $forumComment): void
    {
        $forumComment->client_id = auth()->user()->id;
    }

    /**
     * Handle the ForumComment "updated" event.
     */
    public function updated(ForumComment $forumComment): void
    {
        $forumComment->client_id = auth()->user()->id;
    }

    /**
     * Handle the ForumComment "deleted" event.
     */
    public function deleted(ForumComment $forumComment): void
    {
        //
    }

    /**
     * Handle the ForumComment "restored" event.
     */
    public function restored(ForumComment $forumComment): void
    {
        //
    }

    /**
     * Handle the ForumComment "force deleted" event.
     */
    public function forceDeleted(ForumComment $forumComment): void
    {
        //
    }
}
