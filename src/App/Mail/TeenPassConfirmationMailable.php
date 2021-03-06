<?php

namespace Blashbrook\PAPIForms\App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TeenPassConfirmationMailable extends Mailable
{
    use Queueable, SerializesModels;
    public $confirmation;
    public $theme = 'papiforms::mail.html.themes.default';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($confirmation)
    {
        $this->confirmation = $confirmation;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->confirmation['EmailAddress'])
            ->subject('DCPL Teen Pass Registration Confirmation')
            ->markdown('papiforms::mail.teen-pass-confirmation');
    }
}
