<?php

namespace Blashbrook\PAPIForms\App\Models;

use Blashbrook\PapiformsReact\Facades\DeliveryOption;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PatronRegistration extends Model
{
    use HasFactory;

    protected $fillable = [
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
        'PatronCodeID',
        'ExpirationDate',
        'AddrCheckDate',
        'GenderID',
        'LegalNameFirst',
        'LegalNameLast',
        'LegalNameMiddle',
        'UseLegalNameOnNotices',
    ];

    public function phone1CarrierID(): BelongsTo
    {
        return $this->belongsTo(MobilePhoneCarrier::class, 'Phone1CarrierID');
    }

    public function phone2CarrierID(): BelongsTo
    {
        return $this->belongsTo(MobilePhoneCarrier::class, 'Phone2CarrierID');
    }

    public function phone3CarrierID(): BelongsTo
    {
        return $this->belongsTo(MobilePhoneCarrier::class, 'Phone3CarrierID');
    }

    public function deliveryOptionID(): BelongsTo
    {
        return $this->belongsTo(DeliveryOption::class, 'DeliveryOptionID');
    }

    public function patronCodeID(): BelongsTo
    {
        return $this->belongsTo(PatronCode::class, 'PatronCodeID');
    }
}
