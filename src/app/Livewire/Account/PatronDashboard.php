<?php

namespace App\Livewire;

use App\Traits\ViewHelpers;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use App\Http\Controllers\Patron;

class PatronDashboard extends Component
{
   use ViewHelpers;

   public $current = 'patron-information';

   public $error = '';

   public function mount($view = 'information') {
       $this->current = 'patron-' . $view;
   }

    public function render(): View
    {
        return view('livewire.patron.dashboard')->layout('components.layouts.app');
    }
}
