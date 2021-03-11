<?php

namespace Blashbrook\PAPIForms\App\Mail;

use Illuminate\Mail\Mailable;

class DuplicatePatronMailable extends Mailable
{
    public $confirmation;
    public $theme = 'papiforms::mail.html.themes.default';

    public function __construct($confirmation)
    {
        $this->confirmation = $confirmation;
    }

    public function build()
    {
        return $this->to('dcrowley@dcplibrary.org')
            ->subject('Duplicate Patron Registration')
            ->markdown('papiforms::mail.duplicate-patron');
    }
}
