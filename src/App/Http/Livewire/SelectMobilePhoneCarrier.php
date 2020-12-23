<?php

namespace Blashbrook\PAPIForms\App\Http\Livewire;

use Blashbrook\PAPIForms\App\Models\MobilePhoneCarrier;
use Livewire\Component;

class SelectMobilePhoneCarrier extends Component
{
    public $selectedMobilePhoneCarrierID = '';
    public $CarrierName = '';
    public $Email2SMSEmailAddress = '';
    public $mobilePhoneCarrier = '';
    public $mobilePhoneCarriers;
    public $selectedMobilePhoneCarrierArray;

    public function mount()
    {
        $this->mobilePhoneCarriers = MobilePhoneCarrier::all()->sortBy('CarrierName');
    }

    public function updatedselectedMobilePhoneCarrierID()
    {
        $this->selectedMobilePhoneCarrierArray = $this->mobilePhoneCarriers->find($this->selectedMobilePhoneCarrierID);
    }

    public function render()
    {
        return view('papiforms::livewire.select-mobile-phone-carrier')
            ->layout('papiforms::components.layouts.app');
    }
}
