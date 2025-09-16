<?php

namespace Blashbrook\PAPIForms\App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class PendingUpdate extends Model
    {
        use HasFactory;

        protected $fillable = [
            'access_secret',
            'barcode',
            'field',
            'new_value',
            'token',
        ];
    }
