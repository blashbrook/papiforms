<?php

namespace Blashbrook\PAPIForms\App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatronCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'PatronCodeID',
        'Description',
    ];

    public static function getPatronCodeID($patronCodeDescription)
    {
        return PatronCode::where('Description', $patronCodeDescription)
            ->pluck('PatronCodeID')->first();
    }
}
