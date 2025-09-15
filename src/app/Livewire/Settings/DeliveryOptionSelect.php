<?php

namespace Blashbrook\PAPIForms\App\Livewire\Settings;

    use Blashbrook\PAPIForms\App\Models\DeliveryOption;
    use Illuminate\Support\Collection;
    use Livewire\Attributes\Modelable;
    use Livewire\Component;

    class DeliveryOptionSelect extends Component
    {
        // Public property to bind the selected value to.
        #[Modelable]
        public $selectedOption = null;

        // Public property to hold the options for the select menu.
        public Collection $options; // This is the variable the view expects
        public array $availableDeliveryOptions;
        public function mount($availableDeliveryOptions)
        {
            // Change the assignment to use $this->options
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
