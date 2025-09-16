<?php

namespace App\Livewire;

    use App\Http\Controllers\Patron;
    use App\Livewire\Forms\PatronForm;
    use Illuminate\Contracts\View\View;
    use Livewire\Component;

    class PatronLogin extends Component
    {
        public PatronForm $form;

        public function login(): null
        {
            $this->form->AccessSecret = Patron::auth($this->form->Barcode, $this->form->Password);
            $this->form->setPatronData(Patron::open($this->form->Barcode, $this->form->AccessSecret));

            return $this->redirect('/dashboard/information');
        }

        public function render(): View
        {
            return view('livewire.patron.login')->layout('components.layouts.app');
        }
    }
