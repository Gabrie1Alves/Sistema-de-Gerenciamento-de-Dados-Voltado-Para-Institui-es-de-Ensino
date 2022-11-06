<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
    }

    include_once '../../conection/conect.php';

    $contato = [
        0 => (isset($_POST['tel']) ? $_POST['tel'] : null),
        1 => (isset($_POST['cel1']) ? $_POST['cel1'] : null),
        2 => (isset($_POST['cel2']) ? $_POST['cel2'] : null),
        3 => (isset($_POST['email']) ? $_POST['email'] : null)
    ];

    $senha = (isset($_POST['senha']) ? $_POST['senha'] : 0);

    $mat = $_POST['matricula'];


    $sql = "UPDATE contato SET telefone = '$contato[0]', cel1 = '$contato[1]',
            cel2 = '$contato[2]', email = '$contato[3]' WHERE matricula = '$mat'";
    mysqli_query($conn, $sql);
    if($senha != 0){
        $sql = "UPDATE usuario SET senha = '$senha' WHERE matricula = '$mat'";
        mysqli_query($conn, $sql);
    }
    
?>