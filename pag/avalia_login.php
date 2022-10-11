<?php
session_start();
include_once '../conection/conect.php';

    $matricula = (isset($_POST['cod']) ? $_POST['cod'] : null);
    $senha = (isset($_POST['senha']) ? $_POST['senha'] : null);

    
    $sql = "select matricula, tipo, nome, senha from usuario where matricula = $matricula";
    if($result = $conn->query($sql) ){
        $_SESSION["usuario"] = $result->fetch_assoc();
    }else{
        echo "<script> window.location = '../default.php'</script>";
    }

    if($_SESSION["usuario"]["senha"] != $senha){
        echo "<script> window.location = '../default.php'</script>";
    }else{
        $_SESSION["usuario"]["senha"] = '**********';
    }

    
    if($_SESSION["usuario"]["tipo"] == 'aluno'){
        echo "<script> window.location = './home/aluno.php'</script>";
    }else if($_SESSION["usuario"]["tipo"] == 'professor'){
        echo "<script> window.location = './home/professor.php'</script>";
    }else if($_SESSION["usuario"]["tipo"] == 'gerenciador'){
        echo "<script> window.location = './home/gerenciador.php'</script>";
    }else{
        echo "<script> window.location = '../default.php'</script>";
    }

?>