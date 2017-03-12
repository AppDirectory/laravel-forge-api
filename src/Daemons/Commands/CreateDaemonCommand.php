<?php

namespace Laravel\Forge\Daemons\Commands;

use Laravel\Forge\Server;
use Laravel\Forge\Daemons\Daemon;
use Psr\Http\Message\ResponseInterface;
use Laravel\Forge\Commands\ServerCommand;

class CreateDaemonCommand extends ServerCommand
{
    /**
     * Command name.
     *
     * @return string
     */
    public function command()
    {
        return 'daemons';
    }

    /**
     * HTTP request URL.
     *
     * @param \Laravel\Forge\Server
     *
     * @return string
     */
    public function requestUrl(Server $server)
    {
        return $server->apiUrl('/daemons');
    }

    /**
     * Handle command response.
     *
     * @param \Psr\Http\Message\ResponseInterface $response
     * @param \Laravel\Forge\Server               $server
     *
     * @return \Laravel\Forge\Daemons\Daemon
     */
    public function handleResponse(ResponseInterface $response, Server $server)
    {
        return Daemon::createFromResponse($response, $server->getApi(), $server->id());
    }
}