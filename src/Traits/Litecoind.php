<?php

namespace Kinky\Litecoin\Traits;

trait Litecoind
{
    public function litecoind()
    {
        return app('litecoind');
    }
}
