<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
    }

    include_once '../../conection/conect.php';

    // Pega informação do tipo de cadastro + senha generica
    $tipo = (isset($_POST['tipo']) ? $_POST['tipo'] : null);
    $matricula = (isset($_POST['matricula']) ? $_POST['matricula'] : null);

    $endereco = [
        0 => (isset($_POST['rua']) ? $_POST['rua'] : null),
        1 => (isset($_POST['num']) ? $_POST['num'] : null),
        2 => (isset($_POST['complemento']) ? $_POST['complemento'] : null),
        3 => (isset($_POST['bairro']) ? $_POST['bairro'] : null),
        4 => (isset($_POST['cep']) ? $_POST['cep'] : null),
        5 => (isset($_POST['cidade']) ? $_POST['cidade'] : null),
        6 => (isset($_POST['estado']) ? $_POST['estado'] : null),
        7 => (isset($_POST['pais']) ? $_POST['pais'] : null)
    ];
    $contato = [
        0 => (isset($_POST['tel']) ? $_POST['tel'] : null),
        1 => (isset($_POST['cel1']) ? $_POST['cel1'] : null),
        2 => (isset($_POST['cel2']) ? $_POST['cel2'] : null),
        3 => (isset($_POST['email']) ? $_POST['email'] : null)
    ];
    $sql[0] = "UPDATE contato SET telefone = '$contato[0]', cel1 = '$contato[1]', 
                cel2 = '$contato[2]', email = '$contato[3]' 
                WHERE matricula = '$matricula'";
    $sql[1] = "UPDATE endereco SET rua = '$endereco[0]', numero = '$endereco[1]',
                complemento = '$endereco[2]', bairro = '$endereco[3]',
                cep = '$endereco[4]',cidade = '$endereco[5]',
                estado = '$endereco[6]', pais = '$endereco[7]' 
                WHERE matricula = '$matricula'";
    if($tipo == 'aluno'){
        //endereco, contato, responsavel
        $resp = [
            0 => (isset($_POST['nome_resp']) ? $_POST['nome_resp'] : null),
            1 => (isset($_POST['rg_resp']) ? $_POST['rg_resp'] : null),
            2 => (isset($_POST['cpf_resp']) ? $_POST['cpf_resp'] : null),
            3 => (isset($_POST['tel_resp']) ? $_POST['tel_resp'] : null),
            4 => (isset($_POST['cel_resp']) ? $_POST['cel_resp'] : null),
            5 => (isset($_POST['email_resp']) ? $_POST['email_resp'] : null)
        ];
        $sql[2] = "UPDATE responsavel SET nome = '$resp[0]', rg = '$resp[1]',
                cpf = '$resp[2]', telefone = '$resp[3]', celular = '$resp[4]',
                email = '$resp[5]' 
                WHERE matricula = '$matricula'";
        for($i = 0; $i < 3; $i++){
            if(!mysqli_query($conn, $sql[$i])){
                echo "ERRO NA EXCLUSÃO SQL".$i."!";
                echo "Alguma coisa deu errado no banco :O";
            }
        }
    }else{ //professor
        for($i = 0; $i < 2; $i++){
            if(!mysqli_query($conn, $sql[$i])){
                echo "ERRO NA EXCLUSÃO SQL".$i."!";
                echo "Alguma coisa deu errado no banco :O";
            }
        }
    }
    
?>