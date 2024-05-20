<?php

namespace Blashbrook\PAPIForms\App\Policies;

    use App\User;
    use Blashbrook\PAPIForms\App\Models\PatronRegistration;
    use Illuminate\Auth\Access\HandlesAuthorization;

    class PatronRegistrationPolicy
    {
        use HandlesAuthorization;

        /**
         * Determine whether the user can view any patron registrations.
         *
         * @param  User  $user
         * @return bool
         */
        public function viewAny(User $user): bool
        {
        }

        /**
         * Determine whether the user can view the patron registration.
         *
         * @param  User  $user
         * @param  PatronRegistration  $patronRegistration
         * @return bool
         */
        public function view(User $user, PatronRegistration $patronRegistration): bool
        {
        }

        /**
         * Determine whether the user can create patron registrations.
         *
         * @param  User  $user
         * @return bool
         */
        public function create(User $user): bool
        {
        }

        /**
         * Determine whether the user can update the patron registration.
         *
         * @param  User  $user
         * @param  PatronRegistration  $patronRegistration
         * @return bool
         */
        public function update(User $user, PatronRegistration $patronRegistration): bool
        {
        }

        /**
         * Determine whether the user can delete the patron registration.
         *
         * @param  User  $user
         * @param  PatronRegistration  $patronRegistration
         * @return bool
         */
        public function delete(User $user, PatronRegistration $patronRegistration): bool
        {
        }

        /**
         * Determine whether the user can restore the patron registration.
         *
         * @param  User  $user
         * @param  PatronRegistration  $patronRegistration
         * @return bool
         */
        public function restore(User $user, PatronRegistration $patronRegistration): bool
        {
        }

        /**
         * Determine whether the user can permanently delete the patron registration.
         *
         * @param  User  $user
         * @param  PatronRegistration  $patronRegistration
         * @return bool
         */
        public function forceDelete(User $user, PatronRegistration $patronRegistration): bool
        {
        }
    }
