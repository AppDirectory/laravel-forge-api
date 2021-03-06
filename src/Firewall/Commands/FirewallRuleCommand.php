<?php

namespace Laravel\Forge\Firewall\Commands;

use Laravel\Forge\Firewall\FirewallRule;
use Laravel\Forge\Commands\ResourceCommand;

abstract class FirewallRuleCommand extends ResourceCommand
{
    /**
     * Server resource path.
     *
     * @return string
     */
    public function resourcePath()
    {
        return 'firewall-rules';
    }

    /**
     * Server resource class name.
     *
     * @return string
     */
    public function resourceClass()
    {
        return FirewallRule::class;
    }
}
