<?php

namespace Blashbrook\PAPIForms\App\Http\Livewire;

use Blashbrook\PAPIForms\App\Models\DeliveryOption;
use Livewire\Component;

class SelectDeliveryOption extends Component
{
    public $DeliveryOptionID = '';
    public $deliveryOption = '';
    public $selectedDeliveryOptionID = '';
    public $selectedDeliveryOptionArray;
    public $deliveryOptions;

    /**
     *  Run actions when the component is accessed.
     *  Set values in $deliveryOptions collection by querying the database.
     */
    public function mount()
    {
        $this->deliveryOptions = DeliveryOption::where('DeliveryOption', 'Mailing Address')
            ->orWhere('DeliveryOption', 'Email Address')
            ->orWhere('DeliveryOption', 'Phone 1')
            ->orWhere('DeliveryOption', 'TXT Messaging')
            ->get()->sortBy('DeliveryOption');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('papiforms::livewire.select-delivery-option')
            ->layout('papiforms::components.layouts.app');
    }
}
