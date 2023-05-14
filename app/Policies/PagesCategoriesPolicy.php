<?php

namespace App\Policies;

use App\Models\PagesCategories;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class PagesCategoriesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view all pages categories');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, PagesCategories $pagesCategories): bool
    {
        if ($user->hasPermissionTo('view own pages categories')) {
            return $user->id === $pagesCategories->user_id;
        }

        return $user->hasPermissionTo('view pages categories');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasAnyPermission(['create pages categories', 'create own pages categories']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, PagesCategories $pagesCategories): bool
    {
        if ($user->hasPermissionTo('edit own pages categories')) {
            return $user->id == $pagesCategories->user_id;
        }
        return $user->hasPermissionTo('edit pages categories');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, PagesCategories $pagesCategories): bool
    {
        if ($user->hasPermissionTo('delete own pages categories')) {
            return $user->id === $pagesCategories->user_id;
        }

        return $user->hasPermissionTo('delete pages categories');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, PagesCategories $pagesCategories): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, PagesCategories $pagesCategories): bool
    {
        return true;
    }
}
