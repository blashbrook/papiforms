<?php

namespace Blashbrook\PapiForms\Blashbrook\PapiForms\App\View\Components;

use Illuminate\View\Component;

class SelectPostalCode extends Component
{
    public $selectedPostalCodeID = '56616';
    public $City = 'OWENSBORO';
    public $State = 'KY';
    public $County = 'DAVIESS';
    public $CountryID = '1';
    public $PostalCode = '42301';
    public $postalCodes;
    public $selectedPostalCodeArray;

    public function __construct()
    {
        $this->City = 'OWENSBORO';
        $this->postalCodes = PostalCode::all()->sortBy('PostalCode');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('papiforms::select-postal-code');
    }
}
