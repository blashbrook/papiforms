<?php

namespace Blashbrook\PAPIForms\App\Livewire;

use Blashbrook\PAPIClient\Facades\PAPIClient;
use Blashbrook\PAPIForms\App\Livewire\Forms\PatronForm;
use Blashbrook\PAPIForms\App\Mail\AdultConfirmationMailable;
use Blashbrook\PAPIForms\App\Mail\DuplicatePatronMailable;
use Blashbrook\PAPIForms\App\Mail\PatronApplicationMailable;
use Blashbrook\PAPIForms\Facades\DeliveryOptionController;
use Blashbrook\PAPIForms\Facades\MobilePhoneCarrierController;
use Blashbrook\PAPIForms\Facades\PatronCodeController;
use Blashbrook\PAPIForms\Facades\PostalCodeController;
use Blashbrook\PAPIForms\Facades\UdfOptionController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdultRegistrationForm extends Component
{
    //public $success = false;

    use WithFileUploads;

    public PatronForm $form;

    public $newUpload;
    public $newUploadFilename;

    protected $rules = [
        'newUpload' => 'required',
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
            'Birthdate.adult_birthdate' => 'Must be 18 years or older to get an Adult Library Card.',
            'PhoneVoice1.required' => 'Phone number is required',
            'PhoneVoice1.digits' => 'Phone number must be 10 numbers only.',
            'EmailAddress.required' => 'Email address is required.',
            'EmailAddress.regex' => 'Email address is invalid.',
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
        $this->form->selectedPostalCodeArray = $this->form->postalCodes->find($this->form->selectedPostalCodeID);
        $this->form->PostalCode = $this->form->selectedPostalCodeArray->PostalCode;
        $this->form->City = $this->form->selectedPostalCodeArray->City;
        $this->form->State = $this->form->selectedPostalCodeArray->State;
        $this->form->County = $this->form->selectedPostalCodeArray->County;
        $this->form->CountryID = $this->form->selectedPostalCodeArray->CountryID;
    }

    public function updatedPhone1CarrierID()
    {
        $this->form->TxtPhoneNumber = '1';
    }

    public function closeErrorMessage()
    {
        $this->form->errorMessage = false;
        $this->resetForm();
    }

    /*    public function updatedNewUpload()
        {
            $this->validate(['newUpload' => 'mimes:jpg,png']);
        }*/

    public function submitForm()
    {
        //$this->successMessage = '';
        $this->validate();

        $json = [
            'PostalCode' => $this->form->PostalCode,
            'City' => $this->form->City,
            'State' => $this->form->State,
            'County' => $this->form->County,
            'CountryID' => $this->form->CountryID,
            'StreetOne' => Str::upper($this->form->StreetOne),
            'StreetTwo' => Str::upper($this->form->StreetTwo),
            'NameFirst' => Str::upper($this->form->NameFirst),
            'NameLast' => Str::upper($this->form->NameLast),
            'NameMiddle' => Str::upper($this->form->NameMiddle),
            'User1' => $this->form->User4,
            'User2' => $this->form->User4,
            'User4' => $this->form->User2,
            'Birthdate' => $this->form->Birthdate,
            'PhoneVoice1' => $this->form->PhoneVoice1,
            'Phone1CarrierID' => $this->form->Phone1CarrierID,
            'EmailAddress' => $this->form->EmailAddress,
            'Password' => $this->form->Password,
            'Password2' => $this->form->Password,
            'DeliveryOptionID' => $this->form->DeliveryOptionID,
            'TxtPhoneNumber' => $this->form->TxtPhoneNumber,
            'PatronCode' => $this->form->PatronCode,
            //'Barcode'           => $this->Barcode,
            //'successMessage'    => $this->successMessage
        ];

        $response = PAPIClient::publicRequest('POST', 'patron', $json);
        $body = json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR);
        $this->form->requestCompleted = true;
        $filename = $this->newUpload->store('/', 'uploads');
        $json['newUploadURL'] = Storage::disk('uploads')->url($filename);
        $json['appRecipient'] = env('PAPI_ACCOUNTMGR_EMAIL');
        $json['deliveryOptionDesc'] = DeliveryOptionController::getSelection($this->form->DeliveryOptionID);
        $json['patronCodeDesc'] = PatronCodeController::getSelection($this->form->PatronCode);

        if ($body['ErrorMessage'] === '') {
            $this->form->successMessage = true;
            $this->form->modalTitle = 'Your temporary barcode is '.$body['Barcode'].'.';
            $this->form->modalMessage =
                'You will receive an email from no-reply@dcplibrary.org with more information.
                If the email is not in your Inbox, please check your spam or junk folder.
                Click Continue to complete your online account registration.';
            $this->form->modalBarcode = $body['Barcode'];
            $this->form->modalPIN = $json['Password'];
            $json['Barcode'] = $body['Barcode'];
            $json['first_name'] = $this->form->NameFirst;
            if ($this->form->Phone1CarrierID !== '') {
                $json['mobilePhoneCarrierDesc'] = MobilePhoneCarrierController::getSelection($this->form->Phone1CarrierID);
            }
            Mail::to($json['EmailAddress'])->send(new AdultConfirmationMailable($json));
            Mail::to($this->appRecipient)->send(new PatronApplicationMailable($json));
            $this->resetForm();
        } else {
            $this->form->errorMessage = true;
            if ($body['ErrorMessage'] == 'Duplicate patron name is specified') {
                $this->form->modalTitle = 'Duplicate account detected';
                $this->form->modalMessage = 'You may already have a library account.
                                Your application has been forwarded to a library
                                representative for review.  You will be contacted shortly
                                with more information.';
                Mail::to($this->appRecipient)->send(new DuplicatePatronMailable($json));
            } else {
                $this->form->modalTitle = 'There was an error with your application!';
                $this->form->modalMessage = $body['ErrorMessage'];
                $this->form->modalMessage .= 'Please try again later, or contact the library.';
            }
            $this->form->modalOK = 'closeErrorMessage';
        }
    }

    public function resetForm()
    {
        $this->newUpload = '';
        $this->newUploadFilename = '';
        $this->form->resetForm();
    }

    public function render()
    {
        $this->form->postalCodes = PostalCodeController::createSelection();
        $this->form->mobilePhoneCarriers = MobilePhoneCarrierController::index();
        $this->form->udfOptions = UdfOptionController::createSelection();
        $this->form->deliveryOptions = DeliveryOptionController::createSelection();
        $this->form->PatronCode = PatronCodeController::getPatronCode('Adult');

        return view('papiforms::livewire.adult-registration-form')
            ->layout('papiforms::components.layouts.app');
    }
}
