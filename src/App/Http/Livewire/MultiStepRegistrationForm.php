<?php

namespace Blashbrook\PAPIForms\App\Http\Livewire;

use Livewire\Component;

class MultiStepRegistrationForm extends Component
{

    public $step = 0;
    public $numberOfSteps = 10;
    public $incrementLabel = 'Next';
    public $decrementLabel = 'Back';


    public function increment()
    {
        $this->step++;
       if($this->step < 10)
       {

           $this->incrementLabel = 'Next';
       } else {
           $this->incrementLabel = 'Submit';
       }
    }

    public function decrement()
    {
        if($this->step > 1)
        {
            $this->step--;
        }
    }

    public function submit()
    {
        echo 'done';
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('papiforms::livewire.multi-step-registration-form')
            ->layout('papiforms::components.layouts.app');
    }
}
