<?php

namespace Blashbrook\PAPIForms\Http\Livewire;

use Livewire\Component;

class Boo extends Component
{
    public $name = '';

    public function render()
    {
        return view('papiforms::livewire.boo')
                ->extends('papiforms::layouts.app')
                ->section('content');
    }
}
