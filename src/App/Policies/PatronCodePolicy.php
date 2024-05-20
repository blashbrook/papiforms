<?php

namespace app\Policies;

use App\Models\User;
use Blashbrook\PAPIForms\App\Models\PatronCode;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatronCodePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any patron codes.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the patron code.
     */
    public function view(User $user, PatronCode $patronCode): bool
    {
    }

    /**
     * Determine whether the user can create patron codes.
     */
    public function create(User $user): bool
    {
    }

    /**
     * Determine whether the user can update the patron code.
     */
    public function update(User $user, PatronCode $patronCode): bool
    {
    }

    /**
     * Determine whether the user can delete the patron code.
     */
    public function delete(User $user, PatronCode $patronCode): bool
    {
    }

    /**
     * Determine whether the user can restore the patron code.
     */
    public function restore(User $user, PatronCode $patronCode): bool
    {
    }

    /**
     * Determine whether the user can permanently delete the patron code.
     */
    public function forceDelete(User $user, PatronCode $patronCode): bool
    {
    }
}
