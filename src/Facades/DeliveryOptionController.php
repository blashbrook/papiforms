<?php

namespace Blashbrook\PAPIForms\Facades;

use Illuminate\Support\Facades\Facade;

class DeliveryOptionController extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'delivery_option_controller';
    }
}
