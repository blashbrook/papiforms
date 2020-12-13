<?php

namespace Blashbrook\PAPIForms\App\Http\Livewire;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class SelectPostalCode extends Component
{

    public $postalCodesArray = [];
    public $selector = '';
    public $selectedID = '';
    public $selectedCity = '';
    public $selectedState = '';
    public $selectedPostalCode = '';


    public function mount()
    {
        $this->postalCodes = DB::table('postal_codes')->get();
        foreach ($this->postalCodes as $postalCode) {
            $this->postalCodesArray[$postalCode->id] =
                ['City' => $postalCode->City,
                    'State' => $postalCode->State,
                    'PostalCode' => $postalCode->PostalCode,
                ];
            $this->selector .= '<option value="';
            $this->selector .= $postalCode->id;
            if ($postalCode->id == $this->selectedID) {
                $this->selector .= '" selected="selected';
            }
            $this->selector .= '">';
            $this->selector .= $postalCode->City;
            $this->selector .= ', ';
            $this->selector .= $postalCode->State;
            $this->selector .= '  ';
            $this->selector .= $postalCode->PostalCode;
            $this->selector .= '<//option>';
        }
    }

    public function updatedselectedID(){
     $this->selectedCity = $this->postalCodesArray[$this->selectedID]['City'];
     $this->selectedState = $this->postalCodesArray[$this->selectedID]['State'];
     $this->selectedPostalCode = $this->postalCodesArray[$this->selectedID]['PostalCode'];
}

    public function render()
    {


        return view('papiforms::livewire.select-postal-code')
            ->layout('papiforms::components.layouts.app');
    }
}
