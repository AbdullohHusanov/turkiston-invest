<?php

namespace App\Nova;

use Emilianotisato\NovaTinyMCE\NovaTinyMCE;
use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Eminiarts\Tabs\Traits\HasTabs;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class Post extends Resource
{
    use HasTabs;

    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Post>
     */
    public static $model = \App\Models\Post::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title_uz';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title_uz', 'title_en', 'title_ru'
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
            BelongsTo::make('Created By', 'createdBy', User::class)
                ->hideWhenCreating()
                ->hideWhenUpdating(),
            BelongsTo::make('Updated By', 'updatedBy', User::class)
                ->hideWhenCreating()
                ->hideWhenUpdating(),
            Tabs::make('Content', [
                Tab::make('uz', [
                    NovaTinyMCE::make('Content', 'content_uz')
                        ->rules('required'),
                    Slug::make('Description Uz', 'description_uz')
                        ->from('title_uz')
                        ->separator(' ')
                        ->rules( 'max:255'),
                ]),
                Tab::make('ru', [
                    NovaTinyMCE::make('Content', 'content_ru')
                        ->rules('required'),
                    Slug::make('Description Ru', 'description_ru')
                        ->from('title_ru')
                        ->separator(' ')
                        ->rules('max:255'),
                ]),
                Tab::make('en', [
                    NovaTinyMCE::make('Content', 'content_en')
                        ->rules('required'),
                    Slug::make('Description En', 'description_en')
                        ->from('title_en')
                        ->separator(' ')
                        ->rules('max:255'),
                ]),
            ]),
            BelongsToMany::make('Post Category', 'categories', PostsCategories::class),
            HasMany::make('Comments', 'comments', PostComments::class)        ];
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
