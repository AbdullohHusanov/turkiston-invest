<?php

namespace App\Observers;

use App\Models\PostsCategories;
use Illuminate\Http\Client\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Nova;

class PostsCategoriesObserver
{
    public function creating(PostsCategories $postsCategories): void
    {
        $postsCategories->created_by = auth()->user()->id;
        $postsCategories->updated_by = auth()->user()->id;
    }
    /**
     * Handle the PostsCategories "created" event.
     */
    public function created(PostsCategories $postsCategories): void
    {
//        Nova::whenServing(function (NovaRequest $request) use ($postsCategories) {
//            $postsCategories->created_by = $request->user()->id;
//            $postsCategories->save();
//        }, function (Request $request) use ($postsCategories) {
//
//        });
    }

    /**
     * Handle the PostsCategories "updated" event.
     */
    public function updating(PostsCategories $postsCategories): void
    {
        $postsCategories->updated_by = auth()->user()->id;
    }

    /**
     * Handle the PostsCategories "deleted" event.
     */
    public function deleted(PostsCategories $postsCategories): void
    {
        //
    }

    /**
     * Handle the PostsCategories "restored" event.
     */
    public function restored(PostsCategories $postsCategories): void
    {
        //
    }

    /**
     * Handle the PostsCategories "force deleted" event.
     */
    public function forceDeleted(PostsCategories $postsCategories): void
    {
        //
    }
}
