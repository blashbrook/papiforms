<?php

namespace App\Livewire;

use App\Http\Controllers\Patron;
use App\Traits\ViewHelpers;
use Livewire\Component;
use Livewire\WithFileUploads;
class PatronRenew extends Component
{
    use withFileUploads, ViewHelpers;
    public $photo;

    public function save()
    {
        Patron::savePhoto($this->photo);
        unset($this->photo);
    }

    public function render()
    {
        return view('livewire.patron.renew');
    }

}
