<?php

namespace App\Policies;

use App\Models\ForumComment;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ForumCommentPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view all forum comments');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ForumComment $forumComment): bool
    {
        if ($user->hasPermissionTo('view own forum comments')) {
            return $user->id === $forumComment->user_id;
        }

        return $user->hasPermissionTo('view forum comments');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasAnyPermission(['create forum comments', 'create own forum comments']);
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ForumComment $forumComment): bool
    {
        if ($user->hasPermissionTo('edit own forum comments')) {
            return $user->id == $forumComment->user_id;
        }
        return $user->hasPermissionTo('edit forum comments');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ForumComment $forumComment): bool
    {
        if ($user->hasPermissionTo('delete own forum comments')) {
            return $user->id === $forumComment->user_id;
        }

        return $user->hasPermissionTo('delete forum comments');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ForumComment $forumComment): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ForumComment $forumComment): bool
    {
        return true;
    }
}
