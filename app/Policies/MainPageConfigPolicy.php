<?php

namespace App\Policies;

use App\Models\MainPageConfig;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class MainPageConfigPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view all main page config');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, MainPageConfig $mainPageConfig): bool
    {
        if ($user->hasPermissionTo('view own main page config')) {
            return $user->id === $mainPageConfig->user_id;
        }

        return $user->hasPermissionTo('view main page config');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasAnyPermission(['create main page config', 'create own main page config']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, MainPageConfig $mainPageConfig): bool
    {
        if ($user->hasPermissionTo('edit own main page config')) {
            return $user->id == $mainPageConfig->user_id;
        }
        return $user->hasPermissionTo('edit main page config');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, MainPageConfig $mainPageConfig): bool
    {
        if ($user->hasPermissionTo('delete own main page config')) {
            return $user->id === $mainPageConfig->user_id;
        }

        return $user->hasPermissionTo('delete main page config');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, MainPageConfig $mainPageConfig): bool
    {
        return true;
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, MainPageConfig $mainPageConfig): bool
    {
        return true;
        //
    }
}
