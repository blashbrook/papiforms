<?php

namespace App\Livewire;

use App\Models\PendingUpdate;
use Blashbrook\PAPIClient\Clients\PAPIClient;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

/*@TODO
    * Add dialog when confirmation email is sent
    * Add dialog after confirmation button is pushed to save changes
    * Update Contact information field when changes are saved
    * Add notification email to old email address informing that contact info has been changed
    * Maybe: add note to PUDF field about changes made
    * Beautify emails
*/

class PatronContactConfirm extends Component
{

    #[Url(as: 'token')]
    public $token;

    public function confirm()
    {
        $pending = PendingUpdate::where('token', $this->token)->first();

        if ($pending && $pending->created_at->gt(now()->subHours(24))) {
            $AccessSecret = $pending->access_secret;
            $Barcode = $pending->barcode;
            $field = $pending->field;
            $new_value = $pending->new_value;
            $json = [
                $field => $new_value,
            ];
            $uri = 'patron/'.$Barcode.'?ignoresa=true';
            $response = PAPIClient::authenticatedPatronRequest('PUT', $uri, $AccessSecret, $json);
            $body = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
            session([$field => $new_value]);
            $pending->delete();
            DB::table('pending_updates')->where('token', '=', $this->token)->delete();
        }
    }

    public function render()
    {
        return view('livewire.patron.contact-confirm');
    }
}
