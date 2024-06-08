<?php

namespace Blashbrook\PAPIForms\App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatronRegistrationRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'LogonBranchID' => ['required', 'integer'],
            'LogonUserID' => ['required', 'integer'],
            'LogonWorkstationID' => ['required', 'integer'],
            'PatronBranchID' => ['required', 'integer'],
            'PostalCode' => ['nullable'],
            'ZipPlusFour' => ['nullable'],
            'City' => ['nullable'],
            'State' => ['nullable'],
            'County' => ['nullable'],
            'CountryID' => ['nullable', 'integer'],
            'StreetOne' => ['nullable'],
            'StreetTwo' => ['nullable'],
            'StreetThree' => ['nullable'],
            'NameFirst' => ['nullable'],
            'NameLast' => ['nullable'],
            'NameMiddle' => ['nullable'],
            'User1' => ['nullable'],
            'User2' => ['nullable'],
            'User3' => ['nullable'],
            'User4' => ['nullable'],
            'User5' => ['nullable'],
            'Gender' => ['nullable'],
            'Birthdate' => ['nullable'],
            'PhoneVoice1' => ['nullable'],
            'PhoneVoice2' => ['nullable'],
            'PhoneVoice3' => ['nullable'],
            'Phone1CarrierID' => ['nullable', 'exists:mobile_phone_carriers'],
            'Phone2CarrierID' => ['nullable', 'exists:mobile_phone_carriers'],
            'Phone3CarrierID' => ['nullable', 'exists:mobile_phone_carriers'],
            'EmailAddress' => ['nullable'],
            'AltEmailAddress' => ['nullable'],
            'LanguageID' => ['nullable', 'integer'],
            'UserName' => ['nullable'],
            'Password' => ['nullable'],
            'Password2' => ['nullable'],
            'DeliveryOptionID' => ['nullable', 'exists:delivery_options'],
            'EnableSMS' => ['nullable'],
            'TxtPhoneNumber' => ['nullable', 'integer'],
            'Barcode' => ['nullable'],
            'EReceiptOptionID' => ['nullable', 'integer'],
            'PatronCodeID' => ['required', 'exists:patron_codes'],
            'ExpirationDate' => ['nullable'],
            'AddrCheckDate' => ['nullable'],
            'GenderID' => ['nullable', 'integer'],
            'LegalNameFirst' => ['nullable'],
            'LegalNameLast' => ['nullable'],
            'LegalNameMiddle' => ['nullable'],
            'UseLegalNameOnNotices' => ['required', 'integer'], //
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
