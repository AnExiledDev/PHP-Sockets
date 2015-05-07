<?php
    require_once "../Socket.class.php";

    $Socket = new Socket();
    $SocketConn = $Socket->CreateServerSocket("127.0.0.1", "1337");
    $Socket->Listen($SocketConn);

    do {
        $Accept = $Socket->AcceptData($SocketConn);
        $fromClient = $Socket->ReadData($Accept);

        switch($fromClient) {
            case '1':
                echo "Request #1 Received\n";
                $Socket->WriteData($Accept, "Request #1 Received.");
                break;
            case '2':
                echo "Request #2 Received\n";
                $Socket->WriteData($Accept, "Request #2 Received.");
                break;
            case '3':
                echo "Request #3 Received\n";
                $Socket->WriteData($Accept, "Request #3 Received.");
                break;

        }
    } while(true);