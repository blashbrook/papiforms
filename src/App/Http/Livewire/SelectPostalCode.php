<?php

namespace Blashbrook\PAPIForms\App\Http\Livewire;

use Blashbrook\PAPIForms\App\Models\PostalCode;
use Livewire\Component;

class SelectPostalCode extends Component
{
    public $selectedID = '';
    public $City = 'Owensboro';
    public $State = '';
    public $PostalCode = '';
    public $postalCodes;
    public $selectedArray;

    public function mount()
    {
        $this->City = 'owensboro';
        $this->postalCodes = PostalCode::all()->sortBy('PostalCode');
    }

    public function updatedselectedID()
    {
        $this->selectedArray = $this->postalCodes->find($this->selectedID);
    }

    public function render()
    {
        return view('papiforms::livewire.select-postal-code')
            ->layout('papiforms::components.layouts.app');
    }
}
