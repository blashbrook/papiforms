<?php

    namespace App\Livewire;

    use Illuminate\Contracts\View\View;
    use Livewire\Component;
    use App\Livewire\Forms\PatronForm;
    use App\Http\Controllers\Patron;

    class PatronLogin extends Component
    {
        public PatronForm $form;

        public function login(): null
        {
            $this->form->AccessSecret = Patron::auth($this->form->Barcode,$this->form->Password);
            $this->form->setPatronData(Patron::open($this->form->Barcode, $this->form->AccessSecret));
            return $this->redirect('/dashboard/information');
        }

        public function render(): View
        {
            return view('livewire.patron.login')->layout('components.layouts.app');
        }
    }
