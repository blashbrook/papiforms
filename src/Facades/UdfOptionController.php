<?php

namespace Blashbrook\PAPIForms\Facades;

use Illuminate\Support\Facades\Facade;

class UdfOptionController extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'udf_option_controller';
    }
}
