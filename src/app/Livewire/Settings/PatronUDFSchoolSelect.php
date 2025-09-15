<?php

namespace Blashbrook\PAPIForms\App\Livewire\Settings;

    use Blashbrook\PAPIForms\App\Models\PatronUdf;
    use Livewire\Attributes\Modelable;
    use Livewire\Component;

    class PatronUDFSchoolSelect extends Component
    {
        // The name of the property that the parent component will bind to
        #[Modelable]
        public $selectedOption = null;

        public array $options = [];

        public function mount()
        {
            $patronUdf = PatronUdf::where('Label', 'School')->first();

            if ($patronUdf && $patronUdf->Values) {
                $string = $patronUdf->Values;
                $this->options = array_filter(array_map('trim', explode(',', $string)));
            }
        }

        public function render()
        {
            return view('papiforms::livewire.settings.patron-udf-school-select');
        }
    }
