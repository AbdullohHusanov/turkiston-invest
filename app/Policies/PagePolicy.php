<?php

namespace App\Policies;

use App\Models\Page;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class PagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view all pages');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Page $page): bool
    {
        if ($user->hasPermissionTo('view own pages')) {
            return $user->roles()->where('id', '=', $page->id)->get()->first() !== null;
        }

        return $user->hasPermissionTo('view pages');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasAnyPermission(['create pages', 'create own pages']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Page $page): bool
    {
        if ($user->hasPermissionTo('edit own pages')) {
            return $user->id == $page->user_id;
        }
        return $user->hasPermissionTo('edit pages');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Page $page): bool
    {
        if ($user->hasPermissionTo('delete own pages')) {
            return $user->id === $page->user_id;
        }

        return $user->hasPermissionTo('delete pages');

    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Page $page): bool
    {
        return true;
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Page $page): bool
    {
        return true;
        //
    }
}
