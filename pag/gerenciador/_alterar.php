<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost:8080/TCC_II");
    }

    include_once '../../conection/conect.php';

    // Pega informação do tipo de cadastro + senha generica
    $tipo = (isset($_POST['tipo']) ? $_POST['tipo'] : null);
    $matricula = (isset($_POST['matricula']) ? $_POST['matricula'] : null);

    var_dump($tipo, $matricula);
    die;
    
    if($tipo == 'aluno'){
        // turma_notas, turma_faltas, turma_nf_total, endereco, contato, responsavel, aluno, usuario
        
    }else{
        //disciplica, sigla_disc, rg, cpf, atuacao, nascimento
        

    }
    
?>