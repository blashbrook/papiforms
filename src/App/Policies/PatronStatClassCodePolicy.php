<?php

namespace app\Policies;

use App\Models\User;
use Blashbrook\PAPIForms\App\Models\PatronStatClassCode;
use Illuminate\Auth\Access\HandlesAuthorization;

class PatronStatClassCodePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any patron stat class codes.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the patron stat class code.
     */
    public function view(User $user, PatronStatClassCode $patronStatClassCode): bool
    {
    }

    /**
     * Determine whether the user can create patron stat class codes.
     */
    public function create(User $user): bool
    {
    }

    /**
     * Determine whether the user can update the patron stat class code.
     */
    public function update(User $user, PatronStatClassCode $patronStatClassCode): bool
    {
    }

    /**
     * Determine whether the user can delete the patron stat class code.
     */
    public function delete(User $user, PatronStatClassCode $patronStatClassCode): bool
    {
    }

    /**
     * Determine whether the user can restore the patron stat class code.
     */
    public function restore(User $user, PatronStatClassCode $patronStatClassCode): bool
    {
    }

    /**
     * Determine whether the user can permanently delete the patron stat class code.
     */
    public function forceDelete(User $user, PatronStatClassCode $patronStatClassCode): bool
    {
    }
}
