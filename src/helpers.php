<?php

if (! function_exists('litecoind')) {
    /**
     * Get Litecoind client instance.
     *
     * @return \Weisskpub\Litecoin\Client
     */
    function litecoind()
    {
        return app('litecoind');
    }
}
