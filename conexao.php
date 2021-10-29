<?php
    
    //Conecta no banco de dados

    $con = new mysqli('localhost', 'root', '', 'academia');

    if($con->connect_error){
        $msg = "Falha ao conectar: ".$con->connect_error;
        alertErro($msg);
    }

?>