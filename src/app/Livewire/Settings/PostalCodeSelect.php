<?php

namespace Blashbrook\PAPIForms\App\Livewire\Settings;

use Blashbrook\PAPIForms\App\Models\PostalCode;
use Illuminate\Support\Collection;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class PostalCodeSelect extends Component
{
    #[Modelable]
    public $selectedOption = null;

    public Collection $options;
    //public array $availableDeliveryOptions = [];
    public array $attrs = [];

    public function mount($attrs = [])
    {
        $this->attrs = $attrs;
        $this->options = PostalCode::all()->sortBy('PostalCode');
    }

    public function handleUpdate()
    {
    }

    public function render()
    {
        return view('papiforms::livewire.settings.postal-code-select');
    }
}
