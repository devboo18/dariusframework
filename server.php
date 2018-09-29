<?php

use Ratchet\Server\IoServer;
use Ratchet\Http\HttpServer;
use Ratchet\WebSocket\WsServer;
use Server\ServerControl;

    require './vendor/autoload.php';

    $server = IoServer::factory(
        new HttpServer(
            new WsServer(
                new ServerControl()
            )
        ),
        8000
    );

    $server->run();