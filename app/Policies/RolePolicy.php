<?php

namespace App\Policies;

use App\Models\Role;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class RolePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return true;
        return $user->hasPermissionTo('view all roles');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, \Pktharindu\NovaPermissions\Role $role): bool
    {
//        return true;
        if ($user->hasPermissionTo('view own roles')) {
            return $user->roles()->where('id','=', $role->id)->get()->first() !== null;
        }

        return $user->hasPermissionTo('view roles');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, \Pktharindu\NovaPermissions\Role $role): bool
    {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, \Pktharindu\NovaPermissions\Role $role): bool
    {
        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Role $role): bool
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Role $role): bool
    {
        return true;
    }
}
