<?php

namespace Blashbrook\PAPIForms\App\Http\Livewire;

use Blashbrook\PAPIClient\PAPIClient;
use Livewire\Component;

class PatronRegistrationForm extends Component
{
    public $Birthdate = '';
    public $NameFirst = '';
    public $NameMiddle = '';
    public $NameLast = '';
    public $Email = '';
    public $PhoneVoice1 = '';
    public $StreetOne = '';
    public $StreetTwo = '';
    public $City = '';
    public $State = '';
    public $PostalCode = '';
    public $Barcode = '';
    public $successMessage = '';

    public function submitForm()
    {
        $json = [
            'Birthdate' => $this->Birthdate,
            'NameFirst' => $this->NameFirst,
            'NameMiddle' => $this->NameMiddle,
            'NameLast' => $this->NameLast,
            'Email' => $this->Email,
            'PhoneVoice1' => $this->PhoneVoice1,
            'StreetOne' => $this->StreetOne,
            'StreetTwo' => $this->StreetTwo,
            'City' => $this->City,
            'State' => $this->State,
            'PostalCode' => $this->PostalCode,
            'Barcode' => $this->Barcode,
            'successMessage' => $this->successMessage,
        ];
        $response = PAPIClient::publicRequest('POST', 'patron', $json);
        $body = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
        ddd($body);
    }

    public function render()
    {
        return view('papiforms::livewire.patron-registration-form')
            ->layout('papiforms::components.layouts.app');
    }
}
