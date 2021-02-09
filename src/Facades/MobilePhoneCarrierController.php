<?php

namespace Blashbrook\PAPIForms\Facades;

use Illuminate\Support\Facades\Facade;

class MobilePhoneCarrierController extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'mobile_phone_carrier_controller';
    }
}
