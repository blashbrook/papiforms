<?php

namespace App\Livewire;

use App\Traits\ViewHelpers;
use Livewire\Component;

class PatronInformation extends Component
{
    use ViewHelpers;
    public function render()
    {
        return view('livewire.patron.information');
    }
}
