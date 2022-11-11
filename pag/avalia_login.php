<?php
    session_start();
    include_once '../conection/conect.php';

    $matricula = (isset($_POST['cod']) ? $_POST['cod'] : null);
    $senha = (isset($_POST['senha']) ? $_POST['senha'] : null);

    $sql = "select matricula, tipo, nome, senha from usuario where matricula = $matricula";
    $sql1 = "select * from professor where matricula = $matricula";
    $sql2 = "select * from aluno where matricula = $matricula";
    if($result = $conn->query($sql)){
        $_SESSION["usuario"] = $result->fetch_assoc();

        $result = $conn->query($sql1);
        $_SESSION["professor"] = $result->fetch_assoc();

        $result = $conn->query($sql2);
        $_SESSION["aluno"] = $result->fetch_assoc();
    }else{
        echo "<script> window.location = '../default.php?e=1'</script>";
    }
    if($_SESSION["usuario"]["senha"] != $senha){
        echo "<script> window.location = '../default.php?e=1'</script>";
    }else{
        $_SESSION["usuario"]["senha"] = '**********';
    }
    $_SESSION['link_logo'] = 'gerenciador.php';
    
    if($_SESSION["usuario"]["tipo"] == 'aluno'){
        $_SESSION['link_logo'] = 'aluno.php';
        echo "<script> window.location = './home/aluno.php'</script>";
    }else if($_SESSION["usuario"]["tipo"] == 'professor'){
        $_SESSION['link_logo'] = 'professor.php';
        echo "<script> window.location = './home/professor.php'</script>";
    }else if($_SESSION["usuario"]["tipo"] == 'gerenciador'){
        $_SESSION['link_logo'] = 'gerenciador.php';
        echo "<script> window.location = './home/gerenciador.php'</script>";
    }else{
        echo "<script> window.location = '../default.php?e=1'</script>";
    }

?>