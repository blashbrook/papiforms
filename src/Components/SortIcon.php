<?php

namespace Blashbrook\PAPIForms\Components;

use Illuminate\View\Component;

class Sorticon extends Component
{
    public $field;
    public $sortField;
    public $sortAsc;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($field, $sortField, $sortAsc)
    {
        $this->field = $field;
        $this->sortField = $sortField;
        $this->sortAsc = $sortAsc;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('papiforms::components.sort-icon');
    }
}
