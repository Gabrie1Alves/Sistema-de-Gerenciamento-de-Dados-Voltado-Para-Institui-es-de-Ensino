<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost:8080/TCC_II");
    }

    include_once '../../conection/conect.php';
    $excluir = (isset($_POST['exluir']) ? $_POST['exluir'] : null);
    $id = (isset($_POST['id']) ? $_POST['id'] : null);
    if(empty($excluir)){
        $info = [
            0 => (isset($_POST['turma_sigla']) ? $_POST['turma_sigla'] : null),
            1 => (isset($_POST['disciplina_sigla']) ? $_POST['disciplina_sigla'] : null),
            2 => (isset($_POST['data']) ? $_POST['data'] : null),
            3 => (isset($_POST['hora']) ? $_POST['hora'] : null),
            4 => (isset($_POST['titulo']) ? $_POST['titulo'] : null),
            5 => (isset($_POST['resumo']) ? $_POST['resumo'] : null),
            6 => (isset($_POST['valor']) ? $_POST['valor'] : null)
        ];
        $sql = "INSERT INTO atividades_avaliativas(sigla_turma, sigla_disc, data, horario, titulo, resumo, valor)
                    VALUES ('$info[0]','$info[1]','$info[2]','$info[3]','$info[4]','$info[5]','$info[6]')";
        if(!mysqli_query($conn, $sql)){
            echo "ERRO NO CADASTRO DE ENDEREÇO!";
            echo "Alguma coisa deu errado no banco :O";
        } 
    }else{
        $sql = "DELETE FROM atividades_avaliativas WHERE id = '$id'";
        if(!mysqli_query($conn, $sql)){
            echo "ERRO NO CADASTRO DE ENDEREÇO!";
            echo "Alguma coisa deu errado no banco :O";
        } 
    }
    
?>