<?php

namespace Blashbrook\PAPIForms\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostalCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'PostalCodeID',
        'PostalCode',
        'City',
        'State',
        'CountryID',
        'County',
    ];
}
