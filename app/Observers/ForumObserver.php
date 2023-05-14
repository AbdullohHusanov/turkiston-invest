<?php

namespace App\Observers;

use App\Models\Forum;

class ForumObserver
{
    /**
     * Handle the Forum "created" event.
     */
    public function creating(Forum $forum): void
    {
        $forum->client_id = auth()->user()->id;
    }

    /**
     * Handle the Forum "updated" event.
     */
    public function updated(Forum $forum): void
    {
        $forum->client_id = auth()->user()->id;
    }

    /**
     * Handle the Forum "deleted" event.
     */
    public function deleted(Forum $forum): void
    {
        //
    }

    /**
     * Handle the Forum "restored" event.
     */
    public function restored(Forum $forum): void
    {
        //
    }

    /**
     * Handle the Forum "force deleted" event.
     */
    public function forceDeleted(Forum $forum): void
    {
        //
    }
}
