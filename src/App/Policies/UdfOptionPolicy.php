<?php

namespace app\Policies;

use App\Models\User;
use Blashbrook\PAPIForms\App\Models\UdfOption;
use Illuminate\Auth\Access\HandlesAuthorization;

class UdfOptionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any udf options.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the udf option.
     */
    public function view(User $user, UdfOption $udfOption): bool
    {
    }

    /**
     * Determine whether the user can create udf options.
     */
    public function create(User $user): bool
    {
    }

    /**
     * Determine whether the user can update the udf option.
     */
    public function update(User $user, UdfOption $udfOption): bool
    {
    }

    /**
     * Determine whether the user can delete the udf option.
     */
    public function delete(User $user, UdfOption $udfOption): bool
    {
    }

    /**
     * Determine whether the user can restore the udf option.
     */
    public function restore(User $user, UdfOption $udfOption): bool
    {
    }

    /**
     * Determine whether the user can permanently delete the udf option.
     */
    public function forceDelete(User $user, UdfOption $udfOption): bool
    {
    }
}
