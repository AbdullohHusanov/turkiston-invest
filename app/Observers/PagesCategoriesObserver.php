<?php

namespace App\Observers;

use App\Models\PagesCategories;
use Illuminate\Http\Client\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Nova;

class PagesCategoriesObserver
{
    public function creating(PagesCategories $pagesCategories): void
    {
        $pagesCategories->created_by = auth()->user()->id;
        $pagesCategories->updated_by = auth()->user()->id;
    }
    /**
     * Handle the PagesCategories "created" event.
     */
    public function created(PagesCategories $pagesCategories): void
    {
//        Nova::whenServing(function (NovaRequest $request) use ($pagesCategories) {
//            $pagesCategories->created_by = $request->user()->id;
//            $pagesCategories->save();
//        }, function (Request $request) use ($pagesCategories) {
//
//        });
    }

    /**
     * Handle the PagesCategories "updated" event.
     */
    public function updating(PagesCategories $pagesCategories): void
    {
        $pagesCategories->updated_by = auth()->user()->id;
    }

    /**
     * Handle the PagesCategories "deleted" event.
     */
    public function deleted(PagesCategories $pagesCategories): void
    {
        //
    }

    /**
     * Handle the PagesCategories "restored" event.
     */
    public function restored(PagesCategories $pagesCategories): void
    {
        //
    }

    /**
     * Handle the PagesCategories "force deleted" event.
     */
    public function forceDeleted(PagesCategories $pagesCategories): void
    {
        //
    }
}
