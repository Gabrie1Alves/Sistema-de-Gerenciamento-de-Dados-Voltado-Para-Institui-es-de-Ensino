<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost:8080/TCC_II");
    }

    include_once '../../conection/conect.php';

    // Pega informação do tipo de cadastro + senha generica
    $tipo = (isset($_POST['tipo']) ? $_POST['tipo'] : null);
    $matricula = (isset($_POST['matricula']) ? $_POST['matricula'] : null);
    
    if($tipo == 'aluno'){
        // turma_notas, turma_faltas, turma_nf_total, endereco, contato, responsavel, aluno, usuario
        $sql[0] = "DELETE FROM turma_notas where mat_aluno = '$matricula'";
        $sql[1] = "DELETE FROM turma_faltas where mat_aluno = '$matricula'";
        $sql[2] = "DELETE FROM turma_nf_total where mat_aluno = '$matricula'";
        $sql[3] = "DELETE FROM endereco where matricula = '$matricula'";
        $sql[4] = "DELETE FROM contato where matricula = '$matricula'";
        $sql[5] = "DELETE FROM responsavel where matricula = '$matricula'";
        $sql[6] = "DELETE FROM aluno where matricula = '$matricula'";
        $sql[7] = "DELETE FROM usuario where matricula = '$matricula'";

        for($i = 0; $i < 8; $i++){
            if(!mysqli_query($conn, $sql[$i])){
                echo "ERRO NA EXCLUSÃO SQL".$i."!";
                echo "Alguma coisa deu errado no banco :O";
            }
        }
    }else{
        //disciplica, sigla_disc, rg, cpf, atuacao, nascimento
        $sql_mat = "SELECT sigla_disc from professor where matricula = '$matricula'";
        $sigla_disc = mysqli_query($conn, $sql_mat);
        $sigla_disc = $sigla_disc->fetch_assoc();
        $sigla_disc = $sigla_disc['sigla_disc'];
        $sql[0] = "DELETE FROM turma_material where sigla_disc = '$sigla_disc'";
        $sql[1] = "DELETE FROM endereco where matricula = '$matricula'";
        $sql[2] = "DELETE FROM contato where matricula = '$matricula'";
        $sql[3] = "DELETE FROM professor where matricula = '$matricula'";
        $sql[4] = "DELETE FROM usuario where matricula = '$matricula'";
        for($i = 0; $i < 5; $i++){
            if(!mysqli_query($conn, $sql[$i])){
                echo "ERRO NA EXCLUSÃO SQL".$i."!";
                echo "Alguma coisa deu errado no banco :O";
            }
        }

    }
    
?>