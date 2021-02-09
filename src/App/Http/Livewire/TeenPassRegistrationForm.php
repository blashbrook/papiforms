<?php

namespace Blashbrook\PAPIForms\App\Http\Livewire;

use Blashbrook\PAPIClient\Facades\PAPIClient;
use Blashbrook\PAPIForms\App\Mail\TeenPassConfirmationMailable;
use Blashbrook\PAPIForms\Facades\DeliveryOptionController;
use Blashbrook\PAPIForms\Facades\MobilePhoneCarrierController;
use Blashbrook\PAPIForms\Facades\PatronCodeController;
use Blashbrook\PAPIForms\Facades\PostalCodeController;
use Blashbrook\PAPIForms\Facades\UdfOptionController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class TeenPassRegistrationForm extends Component
{
    //public $success = false;

    public $postalCodes;
    public $selectedPostalCodeArray;
    public $selectedPostalCodeID = '';

    public $udfOptions;

    public $CarrierName = '';
    public $CarrierID = '';
    public $mobilePhoneCarriers;

    public $deliveryOptions;

    public $modalTitle = '';
    public $modalMessage = '';
    public $modalBarcode = '';
    public $modalPIN = '';

    public $PostalCode = '';
    public $City = '';
    public $State = '';
    public $County = '';
    public $CountryID = '';
    public $StreetOne = '';
    public $StreetTwo = '';
    public $NameFirst = '';
    public $NameLast = '';
    public $NameMiddle = '';
    public $User4 = '';
    public $Birthdate = '';
    public $PhoneVoice1 = '';
    public $Phone1CarrierID = '';
    public $EmailAddress = '';
    public $Password = '';
    public $Password2 = '';
    public $DeliveryOptionID = '';
    public $TxtPhoneNumber = '';
    public $PatronCode = '';
    public $successMessage = false;

    protected $rules = [
        'selectedPostalCodeID' => 'required',
        'PostalCode'        => 'required',
        'City'              => 'required',
        'State'             => 'required',
        'County'            => 'required',
        'CountryID'         => 'required',
        'StreetOne'         => 'required',
        'StreetTwo'         => 'nullable',
        'NameFirst'         => 'required',
        'NameLast'          => 'required',
        'NameMiddle'        => 'required',
        'User4'             => 'nullable',
        'Birthdate'         => 'required',
        'PhoneVoice1'       => 'nullable:digits:10',
        'Phone1CarrierID'   => 'nullable',
        'EmailAddress'      => 'nullable',
        'Password'          => 'required',
        'Password2'         => 'required',
        'DeliveryOptionID'  => 'required',
        'TxtPhoneNumber'    => 'nullable',
        'PatronCode'        => 'required',
    ];

    public function mount()
    {
        $this->City = 'OWENSBORO';
    }

    public function updatedselectedPostalCodeID()
    {
        $this->selectedPostalCodeArray = $this->postalCodes->find($this->selectedPostalCodeID);
        $this->PostalCode = $this->selectedPostalCodeArray->PostalCode;
        $this->City = $this->selectedPostalCodeArray->City;
        $this->State = $this->selectedPostalCodeArray->State;
        $this->County = $this->selectedPostalCodeArray->County;
        $this->CountryID = $this->selectedPostalCodeArray->CountryID;
    }

    public function updatedPhone1CarrierID()
    {
        $this->TxtPhoneNumber = '1';
    }

    public function submitForm()
    {
        //$this->successMessage = '';
        $this->validate();

        $json = [
            'PostalCode'        => $this->PostalCode,
            'City'              => $this->City,
            'State'             => $this->State,
            'County'            => $this->County,
            'CountryID'         => $this->CountryID,
            'StreetOne'         => Str::upper($this->StreetOne),
            'StreetTwo'         => Str::upper($this->StreetTwo),
            'NameFirst'         => Str::upper($this->NameFirst),
            'NameLast'          => Str::upper($this->NameLast),
            'NameMiddle'        => Str::upper($this->NameMiddle),
            'User4'             => $this->User4,
            'Birthdate'         => $this->Birthdate,
            'PhoneVoice1'       => $this->PhoneVoice1,
            'Phone1CarrierID'   => $this->Phone1CarrierID,
            'EmailAddress'      => $this->EmailAddress,
            'Password'          => $this->Password,
            'Password2'         => $this->Password2,
            'DeliveryOptionID'  => $this->DeliveryOptionID,
            'TxtPhoneNumber'    => $this->TxtPhoneNumber,
            'PatronCode'        => $this->PatronCode,
            //'Barcode'           => $this->Barcode,
            //'successMessage'    => $this->successMessage
        ];
        $response = PAPIClient::publicRequest('POST', 'patron', $json);
        $body = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
        if ($body['ErrorMessage'] == '') {
            $this->successMessage = true;
            $this->modalTitle = 'Your temporary Teen Pass barcode is '.$body['Barcode'].'.';
            $this->modalMessage =
                'You will receive an email from no-reply@dcplibrary.org with more information.
                If the email is not in your Inbox, please check your spam or junk folder.
                Click Continue to complete your online account registration.';
            $this->modalBarcode = $body['Barcode'];
            $this->modalPIN = $json['Password'];
            $json['Barcode'] = $body['Barcode'];
            $json['first_name'] = $this->NameFirst;
            Mail::to($json['EmailAddress'])->send(new TeenPassConfirmationMailable($json));
            $this->resetForm();
        } else {
            $this->success = false;
            $this->modalTitle = 'Error!';
            $this->modalMessage = 'Your application failed with the error message "'.$body['ErrorMessage'].'". Please try again.';
        }
    }

    public function resetForm()
    {
        $this->selectedPostalCodeID = '';
        $this->PostalCode = '';
        $this->City = '';
        $this->State = '';
        $this->County = '';
        $this->CountryID = '';
        $this->StreetOne = '';
        $this->StreetTwo = '';
        $this->NameFirst = '';
        $this->NameLast = '';
        $this->NameMiddle = '';
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

    public function render()
    {
        $this->postalCodes = PostalCodeController::createSelection();
        $this->mobilePhoneCarriers = MobilePhoneCarrierController::index();
        $this->udfOptions = UdfOptionController::createSelection();
        $this->deliveryOptions = DeliveryOptionController::createSelection();
        $this->PatronCode = PatronCodeController::getPatronCode('Teen Pass');

        return view('papiforms::livewire.teen-pass-registration-form')
            ->layout('papiforms::layouts.app');
    }
}
