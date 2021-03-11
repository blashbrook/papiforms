<?php

namespace Blashbrook\PAPIForms\App\Mail;

use Illuminate\Mail\Mailable;

class PatronApplicationMailable extends Mailable
{
    public $confirmation;
    public $theme = 'papiforms::mail.html.themes.default';

    public function __construct($confirmation)
    {
        $this->confirmation = $confirmation;
    }

    public function build()
    {
        return $this->to($this->confirmation['appRecipient'])
            ->subject('New ' . $this->confirmation['patronCodeDesc'] . ' Registration')
            ->markdown('papiforms::mail.patron-application');
    }
}
