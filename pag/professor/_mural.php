<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
    }

    include_once '../../conection/conect.php';
    $excluir = (isset($_POST['excluir']) ? $_POST['excluir'] : null);
    if(empty($excluir)){
        $sigla_turma = $_POST['sigla_turma'];
        $sigla_disc = $_POST['sigla_disc'];
        $titulo = $_POST['titulo'];
        $informacao = $_POST['informacao'];

        if (isset($_FILES["arquivo"])){
            $arquivo = $_FILES["arquivo"];
            $pasta_destino = "../../material/";
            $arquivo_nome =  uniqid().'_'.$arquivo['name'];
            move_uploaded_file($arquivo['tmp_name'], $pasta_destino . $arquivo_nome);
            $sql = "INSERT INTO turma_material (sigla_turma, sigla_disc, titulo, informacao, material) 
                    VALUES ('$sigla_turma', '$sigla_disc', '$titulo', '$informacao', '$arquivo_nome')";
            if(!mysqli_query($conn, $sql)){
                $erro++;
            }
        }
    }else{
        $id = (isset($_POST['id']) ? $_POST['id'] : null);
        $sql = "DELETE FROM turma_material WHERE id = '$id'";
        mysqli_query($conn, $sql);
    }

    if($erro > 0){
        echo "<script> window.location = '../home/professor.php?e=1'</script>";
    }else{
        echo "<script> window.location = '../home/professor.php?e=0'</script>";
    }
    

?>