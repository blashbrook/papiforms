<?php

namespace Blashbrook\PAPIForms\Http\Livewire;

use GuzzleHttp\Client;
use Livewire\Component;

class PatronRegistrationForm extends Component
{
    public $Birthdate;
    public $NameFirst;
    public $NameMiddle;
    public $NameLast;
    public $Email;
    public $PhoneVoice1;
    public $StreetOne;
    public $StreetTwo;
    public $City;
    public $State;
    public $PostalCode;
    public $Barcode;
    public $successMessage;
    protected $rules = [
        'Birthdate' => 'required|date',
        'NameFirst' => 'required',
        'NameMiddle' => 'required',
        'NameLast' => 'required',
        'Email' => 'required|email',
        'PhoneVoice1' => 'required|digits:10',
        'StreetOne' => 'required',
        'StreetTwo' => 'nullable',
        'City' => 'required|alpha',
        'State' => 'required|alpha|size:2',
        'PostalCode' => 'required|digits:5',
        'Barcode' => 'required|digits:14',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    /*
     *  TODO: Fix Livewire validation in patron registration create form
     */

    public function submitForm()
    {

        $postpatron = $this->validate();


        $httpDate = app('papiDate')->getDate();
        //$uri = config('papi.publicURI') . 'patron';
        $uri = 'https://catalog.dcplibrary.org/PAPIService/REST/public/v1/1033/100/3/apikeyvalidate';
        $concat = 'POST' . $uri . $httpDate;
        $accessKey = config('papi.key');
        //$sha1_sig = 'PW S ' . config('papi.id') . ':' . base64_encode(hash_hmac('sha1', $concat, $accessKey, true));

        $sha1_sig = app('papiToken')->setHash('GET', $concat, $httpDate);
        //$sha1_sig
        $client = new Client();
        $response = $client->request(
        //$response = array(
            'POST',
            $uri,
            ['headers' =>
                ['Accept' => 'application/json',
                    'Authorization' => $sha1_sig,
                    'PolarisDate' => $httpDate],
           /*     'json' => ['LogonBranchID' => config('papi.logonBranchID'),
                    'LogonUserID' => config('papi.logonUserID'),
                    'LogonWorkstationID' => config('papi.logonWorkstationID'),
                    'PatronBranchID' => config('papi.logonBranchID'),
                    'State' => $postpatron['State'],
                    'NameFirst' => $postpatron['NameFirst'],
                    'NameMiddle' => $postpatron['NameMiddle'],
                    'NameLast' => $postpatron['NameLast'],
                    'Barcode' => $postpatron['Barcode'],
                ]*/
            ]
        );
        $response->getStatusCode();
        ddd(json_decode($response->getBody(), true, 512, JSON_THROW_ON_ERROR));
        //ddd($response);

        $this->successMessage = 'We received your message successfully and will get back to you shortly!';
        session()->flash('success_message', 'We received your message successfully and will get back to you shortly!');

        $this->resetForm();
    }

    private function resetForm()
    {
        $this->Birthdate = '';
        $this->NameFirst = '';
        $this->NameMiddle = '';
        $this->NameLast = '';
        $this->Email = '';
        $this->PhoneVoice1 = '';
        $this->StreetOne = '';
        $this->StreetTwo = '';
        $this->City = '';
        $this->State = '';
        $this->PostalCode = '';
        $this->Barcode = '';
    }

    public function render()
    {
        return view('papiforms::livewire.patron-registration-form');
    }
}
