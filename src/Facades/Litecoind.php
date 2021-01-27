<?php

namespace Kinky\Litecoin\Facades;

use Illuminate\Support\Facades\Facade;

class Litecoind extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'litecoind';
    }
}
