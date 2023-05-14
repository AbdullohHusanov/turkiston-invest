<?php

namespace App\Observers;

use App\Models\Page;
use App\Models\PageCategories;
use Illuminate\Http\Client\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Nova;

class PageObserver
{
    public function creating(Page $page): void
    {
        $page->created_by = auth()->user()->id;
        $page->updated_by = auth()->user()->id;
    }

    /**
     * Handle the Page "created" event.
     */
    public function created(Page $page): void
    {
        PageCategories::query()->create([
            'page_id' => $page->id,
            'category_id' => 1
        ]);
    }

    /**
     * Handle the Page "updated" event.
     */
    public function updating(Page $page): void
    {
        $page->updated_by = auth()->user()->id;
    }

    /**
     * Handle the Page "deleted" event.
     */
    public function deleted(Page $page): void
    {
        //
    }

    /**
     * Handle the Page "restored" event.
     */
    public function restored(Page $page): void
    {
        //
    }

    /**
     * Handle the Page "force deleted" event.
     */
    public function forceDeleted(Page $page): void
    {
        //
    }
}
