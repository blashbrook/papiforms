<?php

namespace Blashbrook\PAPIForms\App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin \Blashbrook\PAPIForms\App\Models\PatronRegistration */
class PatronRegistrationResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'id' => $this->id,
            'LogonBranchID' => $this->LogonBranchID,
            'LogonUserID' => $this->LogonUserID,
            'LogonWorkstationID' => $this->LogonWorkstationID,
            'PatronBranchID' => $this->PatronBranchID,
            'PostalCode' => $this->PostalCode,
            'ZipPlusFour' => $this->ZipPlusFour,
            'City' => $this->City,
            'State' => $this->State,
            'County' => $this->County,
            'CountryID' => $this->CountryID,
            'StreetOne' => $this->StreetOne,
            'StreetTwo' => $this->StreetTwo,
            'StreetThree' => $this->StreetThree,
            'NameFirst' => $this->NameFirst,
            'NameLast' => $this->NameLast,
            'NameMiddle' => $this->NameMiddle,
            'User1' => $this->User1,
            'User2' => $this->User2,
            'User3' => $this->User3,
            'User4' => $this->User4,
            'User5' => $this->User5,
            'Gender' => $this->Gender,
            'Birthdate' => $this->Birthdate,
            'PhoneVoice1' => $this->PhoneVoice1,
            'PhoneVoice2' => $this->PhoneVoice2,
            'PhoneVoice3' => $this->PhoneVoice3,
            'EmailAddress' => $this->EmailAddress,
            'AltEmailAddress' => $this->AltEmailAddress,
            'LanguageID' => $this->LanguageID,
            'UserName' => $this->UserName,
            'Password' => $this->Password,
            'Password2' => $this->Password2,
            'EnableSMS' => $this->EnableSMS,
            'TxtPhoneNumber' => $this->TxtPhoneNumber,
            'Barcode' => $this->Barcode,
            'EReceiptOptionID' => $this->EReceiptOptionID,
            'ExpirationDate' => $this->ExpirationDate,
            'AddrCheckDate' => $this->AddrCheckDate,
            'GenderID' => $this->GenderID,
            'LegalNameFirst' => $this->LegalNameFirst,
            'LegalNameLast' => $this->LegalNameLast,
            'LegalNameMiddle' => $this->LegalNameMiddle,
            'UseLegalNameOnNotices' => $this->UseLegalNameOnNotices,

            'Phone1CarrierID' => $this->Phone1CarrierID,
            'Phone2CarrierID' => $this->Phone2CarrierID,
            'Phone3CarrierID' => $this->Phone3CarrierID,
            'DeliveryOptionID' => $this->DeliveryOptionID,
            'PatronCodeID' => $this->PatronCodeID,

            'phone1CarrierID' => new MobilePhoneCarrierResource($this->whenLoaded('phone1CarrierID')),
            'phone2CarrierID' => new MobilePhoneCarrierResource($this->whenLoaded('phone2CarrierID')),
            'phone3CarrierID' => new MobilePhoneCarrierResource($this->whenLoaded('phone3CarrierID')),
            'deliveryOptionID' => new DeliveryOptionResource($this->whenLoaded('deliveryOptionID')),
            'patronCodeID' => new PatronCodeResource($this->whenLoaded('patronCodeID')), //
        ];
    }
}
