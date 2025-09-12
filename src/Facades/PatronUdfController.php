<?php

namespace Blashbrook\PAPIForms\Facades;

use Illuminate\Support\Facades\Facade;

class PatronUdfController extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'patron_udf_controller';
    }
}
