<?php

namespace Blashbrook\PAPIForms\App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class PatronForm extends Form
{
    public $appRecipient = '';

    public $patronUdfOptions;

    public $CarrierName = '';
    public $CarrierID = '';
    public $mobilePhoneCarriers;

    public $modalTitle = '';
    public $modalMessage = '';
    public $modalBarcode = '';
    public $modalPIN = '';
    public $modalOK = '';
    public bool $requestCompleted = false;
    public $successMessage = false;
    public $errorMessage = false;
    public $errorText = '';

    //#[Validate('required')]
    public $StreetOne = '';

    //#[Validate('nullable')]
    public $StreetTwo = '';

    //#[Validate('required')]
    public $NameFirst = '';

    //#[Validate('required')]
    public $NameLast = '';

    //#[Validate('required')]
    public $NameMiddle = '';

    //#[Validate('nullable')]
    public $User1 = '';

    //#[Validate('nullable')]
    public $User2 = '';

    //#[Validate('nullable')]
    public $User4 = '';

    public $Birthdate = '';

    //#[Validate('required|digits:10')]
    public $PhoneVoice1 = '';

    //#[Validate('required_if:DeliveryOptionID,8')]
    public $Phone1CarrierID = '';

    //#[Validate('required|email')]
    public $EmailAddress = '';

    public $Password = '';

    public $Password2 = '';

    //#[Validate('required')]
    public $DeliveryOptionID = '';

    //#[Validate('nullable')]
    public $TxtPhoneNumber = '';

    //#[Validate('required')]
    public $PatronCode = '';

    public function rules()
    {
        return [

            'StreetOne' => 'required',
            'StreetTwo' => 'nullable',
            'NameFirst' => 'required',
            'NameLast' => 'required',
            'NameMiddle' => 'required',
            'User1' => 'required',
            'User4' => 'nullable',
            'Birthdate' => 'required|date_format:m/d/Y|bail|teenpass_birthdate',
            'PhoneVoice1' => 'required|digits:10',
            'Phone1CarrierID' => 'required_if:DeliveryOptionID,8',
            'EmailAddress' => 'required|email',
            'Password' => 'required|digits_between:4,6|same:Password2',
            'Password2' => 'required',
            'DeliveryOptionID' => 'required',
            'TxtPhoneNumber' => 'nullable',
            'PatronCode' => 'required',
        ];
    }

    /**
     * @return void
     */
    public function resetForm(): void
    {
        $this->StreetOne = '';
        $this->StreetTwo = '';
        $this->NameFirst = '';
        $this->NameLast = '';
        $this->NameMiddle = '';
        $this->User1 = '';
        $this->User4 = '';
        $this->Birthdate = '';
        $this->PhoneVoice1 = '';
        $this->Phone1CarrierID = '';
        $this->EmailAddress = '';
        $this->Password = '';
        $this->Password2 = '';
        $this->DeliveryOptionID = '';
        $this->TxtPhoneNumber = '';
        $this->PatronCode = '';
    }
}
