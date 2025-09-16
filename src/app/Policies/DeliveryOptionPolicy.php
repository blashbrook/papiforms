<?php

namespace Blashbrook\PAPIForms\App\Policies;

use Blashbrook\PAPIforms\App\Models\DeliveryOption;
use Blashbrook\PAPIForms\App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DeliveryOptionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any delivery options.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the delivery option.
     */
    public function view(User $user, DeliveryOption $deliveryOption): bool
    {
    }

    /**
     * Determine whether the user can create delivery options.
     */
    public function create(User $user): bool
    {
    }

    /**
     * Determine whether the user can update the delivery option.
     */
    public function update(User $user, DeliveryOption $deliveryOption): bool
    {
    }

    /**
     * Determine whether the user can delete the delivery option.
     */
    public function delete(User $user, DeliveryOption $deliveryOption): bool
    {
    }

    /**
     * Determine whether the user can restore the delivery option.
     */
    public function restore(User $user, DeliveryOption $deliveryOption): bool
    {
    }

    /**
     * Determine whether the user can permanently delete the delivery option.
     */
    public function forceDelete(User $user, DeliveryOption $deliveryOption): bool
    {
    }
}
