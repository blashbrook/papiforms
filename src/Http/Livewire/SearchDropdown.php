<?php

namespace Blashbrook\PAPIForms\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;


/**
 * TODO: Customize for Postal Codes
 *
 * Class SearchDropdown
 * @package Blashbrook\PAPIForms\Http\Livewire
 */
class SearchDropdown extends Component
{
    public $search;
    public $searchResults = [];

    public function updatedSearch($newValue)
    {
        if (strlen($this->search) < 3) {
            $this->searchResults = [];

            return;
        }

        $response = Http::get('https://itunes.apple.com/search/?term=' . $this->search . '&limit=10');

        $this->searchResults = $response->json()['results'];
    }

    public function render()
    {
        return view('papiforms::livewire.search-dropdown')
            ->layout('papiforms::components.layouts.app');
    }
}
