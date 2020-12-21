<?php

namespace Blashbrook\PAPIForms\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatronRegistration extends Model
{
    use HasFactory;

    public $fillable = [
        'LogonBranchID',
        'LogonUserID',
        'LogonWorkstationID',
        'PatronBranchID',
        'PostalCode',
        'ZipPlusFour',
        'City',
        'State',
        'County',
        'CountryID',
        'StreetOne',
        'StreetTwo',
        'StreetThree',
        'NameFirst',
        'NameLast',
        'NameMiddle',
        'User1',
        'User2',
        'User3',
        'User4',
        'User5',
        'Gender',
        'Birthdate',
        'PhoneVoice1',
        'PhoneVoice2',
        'PhoneVoice3',
        'Phone1CarrierID',
        'Phone2CarrierID',
        'Phone3CarrierID',
        'EmailAddress',
        'AltEmailAddress',
        'LanguageID',
        'UserName',
        'Password',
        'Password2',
        'DeliveryOptionID',
        'EnableSMS',
        'TxtPhoneNumber',
        'Barcode',
        'EReceiptOptionID',
        'PatronCode',
        'ExpirationDate',
        'AddrCheckDate',
        'GenderID',
        'LegalNameFirst',
        'LegalNameLast',
        'LegalNameMiddle',
        'UseLegalNameOnNotices'];
}
