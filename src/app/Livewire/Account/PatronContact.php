<?php

namespace App\Livewire;

use App\Traits\ViewHelpers;
use Livewire\Component;


class PatronContact extends Component
{
    use ViewHelpers;

    public $phoneNumberCurrent;
    public $phoneNumberChanged;
    public $emailAddressCurrent;
    public $emailAddressChanged;

    public function updateContactInformation(): void
    {
        if ($this->emailAddressCurrent != $this->emailAddressChanged)
        {
            $this->emailAddressCurrent = $this->emailAddressChanged;
            $this->pendingUpdate('EmailAddress', $this->emailAddressCurrent);
        }

        if ($this->phoneNumberCurrent != $this->phoneNumberChanged)
        {
            $this->phoneNumberCurrent = $this->phoneNumberChanged;
            $this->update('PhoneVoice1', $this->phoneNumberCurrent);
        }
    }

    public function mount(): void
    {
        $this->phoneNumberChanged = $this->phoneNumberCurrent = session('PhoneVoice1');
        $this->emailAddressChanged = $this->emailAddressCurrent = session('EmailAddress');
    }

    public function render()
    {
        return view('livewire.patron.contact');
    }
}
