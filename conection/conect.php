<?php 
    $servidor="localhost";
    $dbname="tccii";
    $dbusuario = "tccuser";
    $dbsenha = "SWES132tccQW";

    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

    if(!$conn){
        die("Falha na conexão: " .mysqli_connect_error());
    }

?>