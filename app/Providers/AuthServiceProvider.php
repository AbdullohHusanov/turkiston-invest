<?php

namespace App\Providers;

use App\Models\User;
use App\Nova\Forum;
use App\Nova\ForumComment;
use App\Nova\Page;
use App\Nova\PagesCategories;
use App\Nova\Post;
use App\Nova\PostsCategories;
use App\Policies\ForumCommentPolicy;
use App\Policies\ForumPolicy;
use App\Policies\PagePolicy;
use App\Policies\PagesCategoriesPolicy;
use App\Policies\PostPolicy;
use App\Policies\PostsCategoriesPolicy;
use Illuminate\Support\Facades\Gate;
use Pktharindu\NovaPermissions\Traits\ValidatesPermissions;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    use ValidatesPermissions;

    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
//         'App\Models\Model' => 'App\Policies\ModelPolicy',
        \Pktharindu\NovaPermissions\Role::class => \App\Policies\RolePolicy::class,
        Post::class => PostPolicy::class,
        Page::class => PagePolicy::class,
        Forum::class => ForumPolicy::class,
        ForumComment::class => ForumCommentPolicy::class,
        PagesCategories::class => PagesCategoriesPolicy::class,
        PostsCategories::class => PostsCategoriesPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        foreach (config('nova-permissions.permissions') as $key => $permissions) {
            Gate::define($key, function (User $user) use ($key) {
                if ($this->nobodyHasAccess($key)) {
                    return true;
                }

                return $user->hasPermissionTo($key);
            });
        }
    }
}
