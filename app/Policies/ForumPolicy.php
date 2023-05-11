<?php

namespace App\Policies;

use App\Models\Forum;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ForumPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view all forum');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Forum $forum): bool
    {
        if ($user->hasPermissionTo('view own forum')) {
            return $user->id === $forum->user_id;
        }

        return $user->hasPermissionTo('view forum');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasAnyPermission(['create forum', 'create own forum']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Forum $forum): bool
    {
        if ($user->hasPermissionTo('edit own forum')) {
            return $user->id == $forum->user_id;
        }
        return $user->hasPermissionTo('edit forum');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Forum $forum): bool
    {
        if ($user->hasPermissionTo('delete own forum')) {
            return $user->id === $forum->user_id;
        }

        return $user->hasPermissionTo('delete forum');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Forum $forum): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Forum $forum): bool
    {
        return true;
    }
}
