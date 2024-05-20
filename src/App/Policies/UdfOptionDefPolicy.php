<?php

namespace app\Policies;

use App\Models\User;
use Blashbrook\PAPIForms\App\Models\UdfOptionDef;
use Illuminate\Auth\Access\HandlesAuthorization;

class UdfOptionDefPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any udf option defs.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the udf option def.
     */
    public function view(User $user, UdfOptionDef $udfOptionDef): bool
    {
    }

    /**
     * Determine whether the user can create udf option defs.
     */
    public function create(User $user): bool
    {
    }

    /**
     * Determine whether the user can update the udf option def.
     */
    public function update(User $user, UdfOptionDef $udfOptionDef): bool
    {
    }

    /**
     * Determine whether the user can delete the udf option def.
     */
    public function delete(User $user, UdfOptionDef $udfOptionDef): bool
    {
    }

    /**
     * Determine whether the user can restore the udf option def.
     */
    public function restore(User $user, UdfOptionDef $udfOptionDef): bool
    {
    }

    /**
     * Determine whether the user can permanently delete the udf option def.
     */
    public function forceDelete(User $user, UdfOptionDef $udfOptionDef): bool
    {
    }
}
