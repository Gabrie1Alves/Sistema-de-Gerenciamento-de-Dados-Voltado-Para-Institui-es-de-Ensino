<?php 
    $servidor="localhost";
    $dbname="tccii";
    $dbusuario = "usuariotcc";
    $dbsenha = "123qwe234";

    $conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

    if(!$conn){
        die("Falha na conexão: " .mysqli_connect_error());
    }

?>