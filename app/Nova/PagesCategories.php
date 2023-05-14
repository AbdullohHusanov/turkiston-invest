<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Slug;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class PagesCategories extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\PagesCategories>
     */
    public static $model = \App\Models\PagesCategories::class;

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
        'id', 'name'
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
            ID::make()->sortable(),Text::make('Name Uz', 'name_uz')
                ->sortable()
                ->rules(['required', 'max:120']),
            Text::make('Name Ru', 'name_ru')
                ->sortable()
                ->rules(['required', 'max:120']),
            Text::make('Name En', 'name_en')
                ->sortable()
                ->rules(['required', 'max:120']),
            Image::make('Image', 'img'),
            Slug::make('Description Uz', 'description_uz')
                ->from('Name Uz')
                ->required(),
            Slug::make('Description Ru', 'description_ru')
                ->from('Name Ru')
                ->required(),
            Slug::make('Description En', 'description_en')
                ->from('Name En')
                ->required(),
            BelongsTo::make('Created By', 'createdBy', User::class)
                ->hideWhenCreating()
                ->hideWhenUpdating(),

            BelongsTo::make('Updated By', 'updatedBy', User::class)
                ->hideWhenCreating()
                ->hideWhenUpdating(),

            BelongsToMany::make('Pages', 'pages', Page::class)
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
