<?php

namespace Blashbrook\PAPIForms\App\Livewire\Settings;

use Blashbrook\PAPIForms\App\Models\DeliveryOption;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\Attributes\Modelable;


class DeliveryOptionSelect extends Component
{

    #[Modelable]
    public $selectedOption = null;

    public Collection $options;
    public array $availableDeliveryOptions = [];
    public array $attrs = [];

    public function mount($availableDeliveryOptions, $attrs)
    {
        $this->availableDeliveryOptions = $availableDeliveryOptions;
        $this->attrs = $attrs;
        $this->options = DeliveryOption::select('DeliveryOptionID')
            ->selectRaw("
                CASE DeliveryOption
                    WHEN 'Mailing Address' THEN 'Mail'
                    WHEN 'Email Address' THEN 'Email'
                    WHEN 'Phone 1' THEN 'Phone'
                    WHEN 'TXT Messaging' THEN 'Text Messaging'
                    ELSE DeliveryOption
                END AS DeliveryOption
            ")
            ->whereIn('DeliveryOption', $availableDeliveryOptions)
            ->pluck('DeliveryOption', 'DeliveryOptionID');
    }

    public function handleUpdate($deliveryOptionId)
    {
        // Find the descriptive name based on the ID
        $deliveryOption = $this->options->get($deliveryOptionId);

        // Emit an event with both the ID and the name
        $this->dispatch('deliveryOptionUpdated', [
            'id' => $deliveryOptionId,
            'name' => $deliveryOption,
        ]);
    }

    public function render()
    {
        return view('papiforms::livewire.settings.delivery-option-select');
    }
}
