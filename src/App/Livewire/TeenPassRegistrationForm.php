<?php

namespace Blashbrook\PAPIForms\App\Livewire;

use Blashbrook\PAPIClient\Clients\PAPIClient;
use Blashbrook\PAPIForms\App\Mail\DuplicatePatronMailable;
use Blashbrook\PAPIForms\App\Mail\PatronApplicationMailable;
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

    public $appRecipient = 'sfrey@dcplibrary.org';
    public $appRecipientCC = 'dcrowley@dcplibrary.org';

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
    public $modalOK = '';
    public bool $requestCompleted = false;
    public $successMessage = false;
    public $errorMessage = false;
    public $errorText = '';

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
    public $User1 = '';
    public $User4 = '';
    public $Birthdate = '';
    public $PhoneVoice1 = '';
    public $Phone1CarrierID = '';
    public $EmailAddress = '';
    public $Password = '';
    public $Password_confirmation = '';
    public $DeliveryOptionID = '';
    public $TxtPhoneNumber = '';
    public $PatronCode = '';

    protected $rules = [
        'selectedPostalCodeID' => 'required',
        'PostalCode' => 'required',
        'City' => 'required',
        'State' => 'required',
        'County' => 'required',
        'CountryID' => 'required',
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
        'Password' => 'required|digits_between:4,6|confirmed',
        //'Password_confirmation'  => 'required',
        'DeliveryOptionID' => 'required',
        'TxtPhoneNumber' => 'nullable',
        'PatronCode' => 'required',
    ];

    public function messages()
    {
        return [
            'selectedPostalCodeID.required' => 'Select a city, state, and postal code.',
            'StreetOne.required' => 'Street address is required.',
            'NameFirst.required' => 'First name is required.',
            'NameLast.required' => 'Last name is required.',
            'NameMiddle.required' => 'Middle name is required.',
            'Birthdate.required' => 'Birthdate is required.',
            'Birthdate.date_format' => 'Birthdate must be in MM/DD/YYYY format.',
            'Birthdate.teenpass_birthdate' => 'Must be 13-17 years old to get a Teen Pass.',
            'User1.required' => 'Parent/Guardian name required to mail card',
            'PhoneVoice1.required' => 'Phone number is required',
            'PhoneVoice1.digits' => 'Phone number must be 10 numbers only.',
            'EmailAddress.required' => 'Email address is required.',
            'EmailAddress.email' => 'Email address is invalid.',
            'Password.required' => 'Password must be 4-6 numbers.',
            'Password.digits_between' => 'Password must be 4-6 numbers.',
            //'Password_confirmation.required'         => '',
            'DeliveryOptionID.required' => 'Select a notification method.',
            'Phone1CarrierID.required_if' => 'Select your mobile phone carrier.',
        ];
    }

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

    public function closeErrorMessage()
    {
        $this->errorMessage = false;
        $this->resetForm();
    }

    public function submitForm()
    {
        //$this->successMessage = '';
        $this->validate();

        $json = [
            'PostalCode' => $this->PostalCode,
            'City' => $this->City,
            'State' => $this->State,
            'County' => $this->County,
            'CountryID' => $this->CountryID,
            'StreetOne' => Str::upper($this->StreetOne),
            'StreetTwo' => Str::upper($this->StreetTwo),
            'NameFirst' => Str::upper($this->NameFirst),
            'NameLast' => Str::upper($this->NameLast),
            'NameMiddle' => Str::upper($this->NameMiddle),
            'User1' => Str::upper($this->User1),
            'User4' => $this->User4,
            'Birthdate' => $this->Birthdate,
            'PhoneVoice1' => $this->PhoneVoice1,
            'Phone1CarrierID' => $this->Phone1CarrierID,
            'EmailAddress' => $this->EmailAddress,
            'Password' => $this->Password,
            'Password2' => $this->Password,
            'DeliveryOptionID' => $this->DeliveryOptionID,
            'TxtPhoneNumber' => $this->TxtPhoneNumber,
            'PatronCode' => $this->PatronCode,
            //'Barcode'           => $this->Barcode,
            //'successMessage'    => $this->successMessage
        ];
        $response = PAPIClient::publicRequest('POST', 'patron', $json);
        $body = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
        $this->requestCompleted = true;
        $json['deliveryOptionDesc'] = DeliveryOptionController::getSelection($this->DeliveryOptionID);
        if ($this->Phone1CarrierID !== '') {
            $json['mobilePhoneCarrierDesc'] = MobilePhoneCarrierController::getSelection($this->Phone1CarrierID);
        }
        $json['patronCodeDesc'] = PatronCodeController::getSelection($this->PatronCode);
        $json['appRecipient'] = $this->appRecipient;
        $json['appRecipientCC'] = $this->appRecipientCC;
        $json['newUploadURL'] = '';
        if ($body['ErrorMessage'] === '') {
            $this->successMessage = true;
            $this->modalTitle = 'Your temporary barcode is '.$body['Barcode'].'.';
            $this->modalMessage =
                'You will receive an email from no-reply@dcplibrary.org with more information.
                If the email is not in your Inbox, please check your spam or junk folder.
                Click Continue to complete your online account registration.';
            $this->modalBarcode = $body['Barcode'];
            $this->modalPIN = $json['Password'];
            $json['Barcode'] = $body['Barcode'];
            $json['first_name'] = $this->NameFirst;

            Mail::to($json['EmailAddress'])->send(new TeenPassConfirmationMailable($json));
            Mail::to($this->appRecipient)->send(new PatronApplicationMailable($json));
            $this->resetForm();
        } else {
            $this->errorMessage = true;
            if ($body['ErrorMessage'] == 'Duplicate patron name is specified') {
                $this->modalTitle = 'Duplicate account detected';
                $this->modalMessage = 'You may already have a library account.
                                Your application has been forwarded to a library
                                representative for review.  You will be contacted shortly
                                with more information.';
                Mail::to($this->appRecipient)->send(new DuplicatePatronMailable($json));
            } else {
                $this->modalTitle = 'There was an error with your application!';
                $this->modalMessage = $body['ErrorMessage'];
                $this->modalMessage .= 'Please try again later, or contact the library.';
            }
            $this->modalOK = 'closeErrorMessage';
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
        $this->User1 = '';
        $this->User4 = '';
        $this->Birthdate = '';
        $this->PhoneVoice1 = '';
        $this->Phone1CarrierID = '';
        $this->EmailAddress = '';
        $this->Password = '';
        $this->Password_confirmation = '';
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
            ->layout('papiforms::components.layouts.app');
    }
}
