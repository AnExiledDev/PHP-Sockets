<?php
    require_once "../Socket.class.php";

    if(isset($_GET['req'])) {
        $req = $_GET['req'];

        $Socket = new Socket();
        $SocketConn = $Socket->CreateClientSocket("127.0.0.1", "1337");

        $Socket->WriteData($SocketConn, $req);
        $fromServer = $Socket->ReadData($SocketConn);

        echo $fromServer;

        $Socket->Close($SocketConn);
    }