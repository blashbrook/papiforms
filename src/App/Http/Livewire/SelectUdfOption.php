<?php

namespace Blashbrook\PAPIForms\App\Http\Livewire;

use Blashbrook\PAPIForms\App\Models\UdfOption;
use Livewire\Component;

/**
 * Class SelectUdf.
 */
class SelectUdfOption extends Component
{
    public $selectedUdfOptionID = '';
    public $udfOption = '';
    public $selectedUdfOptionArray;
    public $udfOptions;

    public function mount()
    {
        $this->udfOptions = UdfOption::select('id', 'UDFOptionID', 'OptionDesc')->addSelect(
            ['Order' => function ($query) {
                $query->select('DisplayOrder')
                    ->from('udf_option_defs')
                    ->whereColumn('UDFOptionID', 'udf_options.UDFOptionID');
            }])->orderBy('Order')
            ->where('AttrID', '60')
            ->get();
    }

    public function updatedselectedUdfOptionID()
    {
        $this->selectedUdfOptionArray = $this->udfOptions->find($this->selectedUdfOptionID);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('papiforms::livewire.select-udf-option')
            ->layout('papiforms::components.layouts.app');
    }
}
