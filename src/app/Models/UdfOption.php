<?php

namespace Blashbrook\PAPIForms\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UdfOption extends Model
{
    use HasFactory;

    protected $fillable = [
        'UDFOptionID',
        'AttrID',
        'OptionDesc',
    ];
}
