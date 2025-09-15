<?php

namespace Blashbrook\PAPIForms\App\Livewire\Settings;

use Blashbrook\PAPIForms\App\Models\PatronUdf;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class PatronUDFSelect extends Component
{
    #[Modelable]
    public $selectedOption = null;

    public $options = [];
    public $udfSelectOptions = [];
    public array $attrs = [];

    public function mount($udfSelectOptions, $attrs)
    {
        $this->udfSelectOptions = $udfSelectOptions;
        $this->attrs = $attrs;
        $udfSelectOptions = $this->udfSelectOptions;
        $label = $udfSelectOptions['Label'];
        $patronUdf = PatronUdf::where('Label', $label)->first();

        if ($patronUdf && $patronUdf->Values) {
            $string = $patronUdf->Values;
            $this->options = array_filter(array_map('trim', explode(',', $string)));
        }
    }

    public function render()
    {
        return view('papiforms::livewire.settings.patron-udf-select');
    }
}
