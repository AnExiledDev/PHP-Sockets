<?php
    require_once "Socket.class.php";

    $Socket = new Socket();
    $SocketConn = $Socket->CreateServerSocket("127.0.0.1", "1337");

    do {
        $fromClient = $Socket->Listen($SocketConn);

        switch($fromClient) {
            case '1':
                echo "Request #1 Received\n";
                break;
            case '2':
                echo "Request #2 Received\n";
                break;
            case '3':
                echo "Request #3 Received\n";
                break;

        }
    } while(true);