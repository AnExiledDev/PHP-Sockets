<?php

class Socket {
    public function CreateServerSocket($host, $port) {
        $socket =   socket_create(AF_INET, SOCK_STREAM, 0);
                    socket_set_option($socket, SOL_SOCKET, SO_REUSEADDR, 1);
                    socket_bind($socket, $host, $port);

        return $socket;
    }

    public function CreateClientSocket($port) {
        $socket =   socket_create(AF_INET, SOCK_STREAM, 0);
                    socket_set_option($socket, SOL_SOCKET, SO_RCVTIMEO, array('sec' => 1, 'usec' => 0));
                    socket_set_option($socket, SOL_SOCKET, SO_SNDTIMEO, array('sec' => 1, 'usec' => 0));
                    socket_connect($socket, "127.0.0.1", $port);

        return $socket;
    }

    public function Listen($socket, $requestLimit = 10,  $maxLength = 10024) {
        socket_listen($socket, $requestLimit);
        $accept     = socket_accept($socket);
        $fromClient = socket_read($accept, $maxLength);

        return $fromClient;
    }
}