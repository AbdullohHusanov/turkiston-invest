<?php

namespace App\Providers;

use App\Nova\Dashboards\Main;
use App\Nova\MainPageConfig;
use App\Nova\Page;
use App\Nova\PagesCategories;
use App\Nova\Post;
use App\Nova\PostComments;
use App\Nova\PostsCategories;
use App\Nova\Role;
use App\Nova\User;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use Illuminate\Http\Request;
use Oneduo\NovaFileManager\NovaFileManager;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        $this->initFooter();
//        $this->initMenu();
    }

    public function initMenu()
    {

        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::dashboard(Main::class)->icon('chart-bar'),

                MenuSection::make('Resources', [
                    MenuItem::resource(User::class),
                    MenuItem::resource(Role::class),
                    MenuItem::resource(Post::class),
                    MenuItem::resource(Page::class),
                    MenuItem::resource(PagesCategories::class),
                    MenuItem::resource(PostsCategories::class),
                    MenuItem::resource(PostComments::class),
                    MenuItem::resource(MainPageConfig::class),
                ])->icon('user')
                    ->collapsable(),

                MenuSection::make('Menu builder')
                    ->path('/menus')
                    ->icon('adjustments'),

                MenuItem::
                externalLink('< clients area', '/clients'),

                MenuItem::
                externalLink('< website', '/')
            ];
        });
    }


    public function initFooter()
    {
        Nova::footer(function ($request) {
            return view('admin.footer')->render();
        });

    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
            ->withAuthenticationRoutes()
            ->withPasswordResetRoutes()
            ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate(): void
    {
        Gate::define('viewNova', function ($user) {
            return ($user->hasPermissionTo('view admin'));
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new \Badinansoft\LanguageSwitch\LanguageSwitch(),
            \Pktharindu\NovaPermissions\NovaPermissions::make()->roleResource(Role::class),
            \Outl1ne\MenuBuilder\MenuBuilder::make(),
            NovaFileManager::make(),
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    protected function authorization()
    {
        Nova::auth(function ($request) {
            return app()->environment('local') ||
                Gate::check('viewNova', [Nova::user($request)]);
        });
    }
}
