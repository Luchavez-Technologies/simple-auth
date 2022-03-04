<?php

namespace Luchtech\SimpleAuth\Facades;

use Illuminate\Support\Facades\Facade;

class SimpleAuth extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'simple-auth';
    }
}
