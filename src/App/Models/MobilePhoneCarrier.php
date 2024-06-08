<?php

namespace Blashbrook\PAPIForms\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobilePhoneCarrier extends Model
{
    use HasFactory;

    protected $fillable = [
        'CarrierID',
        'CarrierName',
        'Email2SMSEmailAddress',
        'NumberOfDigits',
        'Display',
    ];
}
