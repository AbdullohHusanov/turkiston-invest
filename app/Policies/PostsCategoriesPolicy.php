<?php

namespace App\Policies;

use App\Models\PostsCategories;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class PostsCategoriesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view all posts categories');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, PostsCategories $postsCategories): bool
    {
        if ($user->hasPermissionTo('view own posts categories')) {
            return $user->id === $postsCategories->user_id;
        }

        return $user->hasPermissionTo('view posts categories');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasAnyPermission(['create posts categories', 'create own posts categories']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, PostsCategories $postsCategories): bool
    {
        if ($user->hasPermissionTo('edit own posts categories')) {
            return $user->id == $postsCategories->user_id;
        }
        return $user->hasPermissionTo('edit posts categories');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, PostsCategories $postsCategories): bool
    {
        if ($user->hasPermissionTo('delete own posts categories')) {
            return $user->id === $postsCategories->user_id;
        }

        return $user->hasPermissionTo('delete posts categories');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, PostsCategories $postsCategories): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, PostsCategories $postsCategories): bool
    {
        return true;
    }
}
