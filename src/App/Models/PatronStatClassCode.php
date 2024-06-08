<?php

namespace Blashbrook\PAPIForms\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatronStatClassCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'StatisticalClassID',
        'OrganizationID',
        'Description',
    ];
}
