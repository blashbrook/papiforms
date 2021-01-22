<?php

namespace Blashbrook\PAPIForms\View\Components;

use Illuminate\View\Component;

class RegistrationFormModal extends Component
{
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('papiforms::registration-form-modal')
            ->layout('papiforms::layouts.app');
    }
}
