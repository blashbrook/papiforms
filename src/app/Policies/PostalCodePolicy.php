<?php

namespace app\Policies;

use Blashbrook\PAPIForms\App\Models\PostalCode;
use Blashbrook\PAPIForms\App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostalCodePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any postal codes.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the postal code.
     */
    public function view(User $user, PostalCode $postalCode): bool
    {
    }

    /**
     * Determine whether the user can create postal codes.
     */
    public function create(User $user): bool
    {
    }

    /**
     * Determine whether the user can update the postal code.
     */
    public function update(User $user, PostalCode $postalCode): bool
    {
    }

    /**
     * Determine whether the user can delete the postal code.
     */
    public function delete(User $user, PostalCode $postalCode): bool
    {
    }

    /**
     * Determine whether the user can restore the postal code.
     */
    public function restore(User $user, PostalCode $postalCode): bool
    {
    }

    /**
     * Determine whether the user can permanently delete the postal code.
     */
    public function forceDelete(User $user, PostalCode $postalCode): bool
    {
    }
}
