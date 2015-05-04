<?php
    require_once "Socket.class.php";

    if(isset($_GET['req'])) {
        $req = $_GET['req'];

        $Socket = new Socket();
        $SocketConn = $Socket->CreateClientSocket(1337);

        socket_write($SocketConn, $req, strlen($req));
        socket_close($SocketConn);
    }