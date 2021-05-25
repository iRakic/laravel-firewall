<?php

namespace IRakic\LaravelFirewall;

use Illuminate\Support\Facades\Facade;

/**
 * @see \IRakic\LaravelFirewall\Skeleton\SkeletonClass
 */
class LaravelFirewallFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-firewall';
    }
}
