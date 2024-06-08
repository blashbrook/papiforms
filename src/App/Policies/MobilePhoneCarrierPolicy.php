<?php

namespace app\Policies;

use App\Models\User;
use Blashbrook\PAPIForms\App\Models\MobilePhoneCarrier;
use Illuminate\Auth\Access\HandlesAuthorization;

class MobilePhoneCarrierPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any mobile phone carriers.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the mobile phone carrier.
     */
    public function view(User $user, MobilePhoneCarrier $mobilePhoneCarrier): bool
    {
    }

    /**
     * Determine whether the user can create mobile phone carriers.
     */
    public function create(User $user): bool
    {
    }

    /**
     * Determine whether the user can update the mobile phone carrier.
     */
    public function update(User $user, MobilePhoneCarrier $mobilePhoneCarrier): bool
    {
    }

    /**
     * Determine whether the user can delete the mobile phone carrier.
     */
    public function delete(User $user, MobilePhoneCarrier $mobilePhoneCarrier): bool
    {
    }

    /**
     * Determine whether the user can restore the mobile phone carrier.
     */
    public function restore(User $user, MobilePhoneCarrier $mobilePhoneCarrier): bool
    {
    }

    /**
     * Determine whether the user can permanently delete the mobile phone carrier.
     */
    public function forceDelete(User $user, MobilePhoneCarrier $mobilePhoneCarrier): bool
    {
    }
}
