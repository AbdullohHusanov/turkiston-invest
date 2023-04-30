<?php

namespace App\Nova;

use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Page extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Page>
     */
    public static $model = \App\Models\Page::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'name', 'template_id'
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Text::make('Title Uz', 'title_uz')
                ->sortable()
                ->rules('required', 'max:255'),

            Slug::make('Title Ru', 'title_ru')
                ->from('title_uz')
                ->separator(' ')
                ->rules('required', 'max:255'),

            Slug::make('Title En', 'title_en')
                ->from('title_uz')
                ->separator(' ')
                ->rules('required', 'max:255'),

            Slug::make('Slug', 'slug')
                ->from('title_uz')
                ->separator('_')
                ->rules('required'),

            Image::make('Image', 'img'),

            Number::make('View', 'view')
                ->hideWhenCreating()
                ->hideWhenUpdating(),

            BelongsTo::make('Created By', 'user', User::class)
                ->hideWhenCreating()
                ->hideWhenUpdating(),

            BelongsTo::make('Updated By', 'user', User::class)
                ->hideWhenCreating()
                ->hideWhenUpdating(),

            Tabs::make('Content', [
                Tab::make('uz', [
                    NovaTinyMCE::make('Content', 'content_uz')
                        ->rules('required'),
                ]),
                Tab::make('ru', [
                    NovaTinyMCE::make('Content', 'content_ru')
                        ->rules('required'),
                ]),
                Tab::make('en', [
                    NovaTinyMCE::make('Content', 'content_en')
                        ->rules('required'),
                ]),
            ]),

            BelongsToMany::make('Page Category', 'categories', PagesCategories::class)
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param \Laravel\Nova\Http\Requests\NovaRequest $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
}
