<?php

namespace Blashbrook\PAPIForms\App\Http\Livewire;

use Blashbrook\PAPIForms\App\Models\PostalCode;
use Livewire\Component;

class SelectPostalCode extends Component
{
    public $selectedPostalCodeID = '';
    public $City = 'OWENSBORO';
    public $State = '';
    public $PostalCode = '';
    public $postalCodes;
    public $selectedPostalCodeArray;

    public function mount()
    {
        $this->City = 'OWENSBORO';
        $this->postalCodes = PostalCode::all()->sortBy('PostalCode');
    }

    public function updatedselectedPostalCodeID()
    {
        $this->selectedPostalCodeArray = $this->postalCodes->find($this->selectedPostalCodeID);
    }

    public function render()
    {
        return view('papiforms::livewire.select-postal-code')
            ->layout('papiforms::components.layouts.app');
    }
}
