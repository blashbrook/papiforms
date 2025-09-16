<?php

    namespace Blashbrook\PAPIForms\App\Models;

    use Illuminate\Database\Eloquent\Model;

    class PatronStatClassCode extends Model
    {
        protected $fillable = [
           'StatisticalClassID',
            'OrganizationID',
            'Description',
        ];

    }
