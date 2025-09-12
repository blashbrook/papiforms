<?php

namespace Blashbrook\PAPIForms\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UdfOptionDef extends Model
{
    use HasFactory;

    protected $fillable = [
        'OrgID',
        'UDFOptionID',
        'AttrID',
        'DisplayOrder',
    ];
}
