<?php

    if ($_SERVER['REQUEST_METHOD'] == 'GET' ){
        $txt="[GET | ID:".$_REQUEST['id']." | Cuerpo:".file_get_contents($_GET['id'])." | Hora:".date("Y-m-d H:i:s")."]\n";
    } else if ($_SERVER['REQUEST_METHOD'] == 'POST' ){
        file_put_contents($_REQUEST['id'], file_get_contents("php://input"), FILE_APPEND);
        $txt="[POST | ID:".$_REQUEST['id']." | Cuerpo:".file_get_contents("php://input")." | Hora:".date("Y-m-d H:i:s")."]\n";
    } else if ($_SERVER['REQUEST_METHOD'] == 'PUT' ){
        file_put_contents($_REQUEST['id'], file_get_contents("php://input"), FILE_APPEND);
        $txt="[PUT | ID:".$_REQUEST['id']." |\n Cuerpo:".file_get_contents("php://input")." | Hora:".date("Y-m-d H:i:s")."]\n";
    } else if ($_SERVER['REQUEST_METHOD'] == 'DELETE' ){
        unlink($_GET['id']);
        $txt="[DELETE | ID:".$_REQUEST['id']." | Hora:".date("Y-m-d H:i:s")."]\n";
    } else {
        $txt="[ERROR | Hora:".date("Y-m-d H:i:s")."]\n";
    }
    file_put_contents("logs.txt", $txt, FILE_APPEND);
    //file_put_contents("logs.txt", "DELETE\n ", FILE_APPEND);

?>