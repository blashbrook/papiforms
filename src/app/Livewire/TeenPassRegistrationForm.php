<?php

namespace Blashbrook\PAPIForms\App\Livewire;

use Blashbrook\PAPIClient\PAPIClient;
use Blashbrook\PAPIForms\App\Concerns\PatronFormConcerns;
use Blashbrook\PAPIForms\App\Livewire\Forms\PatronForm;
use Blashbrook\PAPIForms\App\Mail\DuplicatePatronMailable;
use Blashbrook\PAPIForms\App\Mail\PatronApplicationMailable;
//use Blashbrook\PAPIForms\Facades\DeliveryOptionController;
use Blashbrook\PAPIForms\App\Mail\TeenPassConfirmationMailable;
use Blashbrook\PAPIForms\Facades\MobilePhoneCarrierController;
use Blashbrook\PAPIForms\Facades\PatronCodeController;
use Blashbrook\PAPIForms\Facades\PatronUdfController;
use Blashbrook\PAPIForms\Facades\PostalCodeController;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Livewire\Component;

class TeenPassRegistrationForm extends Component
{
    use PatronFormConcerns;

    public PatronForm $form;
    protected PAPIClient $papiclient;

    public $postalCodes;
    public $selectedPostalCodeArray;
    public $selectedPostalCodeID = '';
    public $PostalCode = '';
    public $City = '';
    public $State = '';
    public $County = '';
    public $CountryID = '';
    public $patronUdfOptions;

    public string $deliveryOptionName = '';
    protected $listeners = ['deliveryOptionUpdated'];

    /**
     * @return string[]
     */
    public function messages(): array
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
            'Password.same' => 'Passwords do not match.',
            'DeliveryOptionID.required' => 'Select a notification method.',
            'Phone1CarrierID.required_if' => 'Select your mobile phone carrier.',
        ];
    }

    /**
     * @return void
     */
    public function mount(): void
    {
        $this->City = 'OWENSBORO';
    }

    /**
     * @return void
     */
    public function updateselectedPostalCodeID(): void
    {
        $this->selectedPostalCodeArray = $this->postalCodes->find($this->selectedPostalCodeID);
        $this->form->PostalCode = $this->selectedPostalCodeArray->PostalCode;
        $this->form->City = $this->selectedPostalCodeArray->City;
        $this->form->State = $this->selectedPostalCodeArray->State;
        $this->form->County = $this->selectedPostalCodeArray->County;
        $this->form->CountryID = $this->selectedPostalCodeArray->CountryID;
    }

    /**
     * @return void
     */
    public function updatedPhone1CarrierID(): void
    {
        $this->form->TxtPhoneNumber = '1';
    }

    /**
     * @return void
     */
    public function closeErrorMessage(): void
    {
        $this->form->errorMessage = false;
        //$this->form->resetForm();
    }

    /**
     * @return void
     *
     * @throws GuzzleException
     * @throws \JsonException
     */
    public function submitForm(): void
    {
        if ($this->form->DeliveryOptionID === '8') {
            $this->form->Phone1CarrierID = '1';
            $this->form->TxtPhoneNumber = '1';
        }

        $this->form->validate();

        $json = [
            'PostalCode' => $this->PostalCode,
            'City' => $this->City,
            'State' => $this->State,
            'County' => $this->County,
            'CountryID' => $this->CountryID,
            'StreetOne' => Str::upper($this->form->StreetOne),
            'StreetTwo' => Str::upper($this->form->StreetTwo),
            'NameFirst' => Str::upper($this->form->NameFirst),
            'NameLast' => Str::upper($this->form->NameLast),
            'NameMiddle' => Str::upper($this->form->NameMiddle),
            'User1' => Str::upper($this->form->User1),
            'User2' => $this->form->User2,
            'User4' => $this->form->User4,
            'Birthdate' => $this->form->Birthdate,
            'PhoneVoice1' => $this->form->PhoneVoice1,
            'Phone1CarrierID' => $this->form->Phone1CarrierID,
            'EmailAddress' => $this->form->EmailAddress,
            'Password' => $this->form->Password,
            'Password2' => $this->form->Password2,
            'DeliveryOptionID' => $this->form->DeliveryOptionID,
            'TxtPhoneNumber' => $this->form->TxtPhoneNumber,
            'PatronCode' => $this->form->PatronCode,
            //'Barcode'           => $this->form->Barcode,
            //'successMessage'    => $this->form->successMessage
        ];

        $body = $this->papiclient->method('POST')->uri('patron')->params($json)->execRequest();
        $this->form->requestCompleted = true;
        $json['deliveryOptionDesc'] = $this->deliveryOptionName;
        if ($this->form->Phone1CarrierID !== '') {
            $json['mobilePhoneCarrierDesc'] = MobilePhoneCarrierController::getSelection($this->form->Phone1CarrierID);
        }
        $json['patronCodeDesc'] = PatronCodeController::getSelection($this->form->PatronCode);
        //Change before push
        $json['appRecipient'] = env('PAPI_ACCOUNTMGR_EMAIL');
        $json['newUploadURL'] = '';
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

            Mail::to($json['EmailAddress'])->send(new TeenPassConfirmationMailable($json));
            Mail::to($this->form->appRecipient)->send(new PatronApplicationMailable($json));
            $this->form->resetForm();
        } else {
            $this->form->errorMessage = true;
            if ($body['ErrorMessage'] == 'Duplicate patron name is specified') {
                $this->form->modalTitle = 'Duplicate account detected';
                $this->form->modalMessage = 'You may already have a library account.
                                Your application has been forwarded to a library
                                representative for review.  You will be contacted shortly
                                with more information.';
                Mail::to($this->form->appRecipient)->send(new DuplicatePatronMailable($json));
            } else {
                $this->form->modalTitle = 'There was an error with your application!';
                $this->form->modalMessage = $body['ErrorMessage'];
                $this->form->modalMessage .= 'Please try again later, or contact the library.';
            }
            $this->form->modalOK = 'closeErrorMessage';
        }
    }

    public function boot(PAPIClient $papiclient)
    {
        $this->papiclient = $papiclient;
    }

    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function render(): \Illuminate\Foundation\Application|View|Factory|\Illuminate\View\View|Application
    {
        $this->postalCodes = PostalCodeController::createSelection();
        $this->form->mobilePhoneCarriers = MobilePhoneCarrierController::index();
        $this->form->patronUdfOptions = PatronUdfController::createSelection();
        $this->form->PatronCode = PatronCodeController::getPatronCode('Teen Pass');

        return view('papiforms::livewire.teen-pass-registration-form')
            ->layout('papiforms::components.layouts.app');
    }
}
