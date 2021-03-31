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
            ->cc('blashbrook@dcplibrary.org')
            ->subject('NEW - '.
                $this->confirmation['NameLast'].', '.
                $this->confirmation['NameFirst'].' '.
                $this->confirmation['NameMiddle'].' - '.
                $this->confirmation['patronCodeDesc'])
            ->markdown('papiforms::mail.patron-application');
    }
}
