<?php

    namespace Blashbrook\PAPIForms\App\Concerns;

    use Blashbrook\PAPIForms\App\Models\PendingUpdate;
    use Illuminate\Support\Facades\Mail;
    use Illuminate\Support\Str;

    trait ViewConcerns
    {
        public function showInformation()
        {
            $this->current = 'patron-information';
        }
        public function showContact()
        {
            $this->current = 'patron-contact';
        }
        public function showNotifications()
        {
            $this->current = 'patron-notifications';
        }
        public function showRenew()
        {
            $this->current = 'patron-renew';
        }

        protected function pendingUpdate($field, $newValue)
        {
            $token = Str::random(32);

            $pending = PendingUpdate::create([
                'access_secret' => session('AccessSecret'),
                'barcode' => session('Barcode'),
                'field' => $field,
                'new_value' => $newValue,
                'token' => $token,
            ]);
            Mail::to([env('PAPI_ADMIN_EMAIL')])
                ->send(new ConfirmUpdateMail($token));
        }

        protected function update($key, $value): void
        {
            session([$key=>$value]);
            Patron::edit($key,$value);
        }
    }
