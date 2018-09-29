<?php

namespace Server;

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use Server\RequestDispatcher;

class ServerControl implements MessageComponentInterface {

    protected $clients;
    private $dispatcher;

    public function __construct() {
        $this->clients = [];

        $this->dispatcher = new RequestDispatcher();

    }

    public function onOpen(ConnectionInterface $conn) {
        // Store the new connection to send messages to later
        $this->clients[$conn->resourceId] = [
            'connection' => $conn
        ];
    }

    public function onMessage(ConnectionInterface $from, $msg) {

        if(strpos($msg,'/') !== -1){

            $url = explode('/',$msg);
            $url['table'] = $url[0];
            $url['method'] = $url[1];

            $return = $this->dispatcher->index($url,true);

            foreach ($this->clients as $client) {
                if ($from !== $client) {
                    // The sender is not the receiver, send to each client connected
                    $client['connection']->send($return);
                }
            }
        }

    }

    public function onClose(ConnectionInterface $conn) {
        // The connection is closed, remove it, as we can no longer send it messages
        $this->clients->detach($conn);

        echo "Connection {$conn->resourceId} has disconnected\n";
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        echo "An error has occurred: {$e->getMessage()}\n";

        $conn->close();
    }

}