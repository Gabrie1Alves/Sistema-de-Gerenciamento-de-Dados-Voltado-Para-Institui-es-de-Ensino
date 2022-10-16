<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost:8080/TCC_II");
    }

    include_once '../../conection/conect.php';

    // Pega informação do tipo de cadastro + senha generica
    $tipo = (isset($_POST['tipo']) ? $_POST['tipo'] : null);
    $senha = '123qwe';

    // Pega as infos de contato
    $info = [
        0 => (isset($_POST['tel']) ? $_POST['tel'] : null),
        1 => (isset($_POST['cel1']) ? $_POST['cel1'] : null),
        2 => (isset($_POST['cel2']) ? $_POST['cel2'] : null),
        3 => (isset($_POST['email']) ? $_POST['email'] : null)
    ];

    //Pegas as infos de endereço
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

   // Cadastra usuário (PADRÃO)
   $sql_user = "INSERT INTO usuario(tipo, senha, nome) VALUES ('$tipo', '$senha', '$usuario[0]');";
   if(!mysqli_query($conn, $sql_user)){
       echo "ERRO NO CADASTRO DE USUÁRIO!";
       echo "Alguma coisa deu errado no banco :O";
   }

   // Cadastra endereço (PADRÃO)
   $sql_endereco = "INSERT INTO endereco(matricula, rua, numero, complemento, bairro, cep, cidade, estado, pais) 
                    VALUES ('$mat', '$endereco[0]','$endereco[1]','$endereco[2]','$endereco[3]','$endereco[4]','$endereco[5]','$endereco[6]','$endereco[7]')";
    if(!mysqli_query($conn, $sql_endereco)){
        echo "ERRO NO CADASTRO DE ENDEREÇO!";
        echo "Alguma coisa deu errado no banco :O";
    }   

    // Cadastra contato (PADRÃO)
    $sql_info = "INSERT INTO contato(matricula, telefone, cel1, cel2, email) VALUES ('$mat', '$info[0]','$info[1]','$info[2]','$info[3]')";
    if(!mysqli_query($conn, $sql_info)){
        echo "ERRO NO CADASTRO DE CONTATOS!";
        echo "Alguma coisa deu errado no banco :O";
    }

    if($tipo == 'aluno'){

    }else if($tipo == 'professor'){
        $usuario = [
            0 => (isset($_POST['nome']) ? $_POST['nome'] : null),
            1 => (isset($_POST['disciplina']) ? $_POST['disciplina'] : null),
            2 => (isset($_POST['sigla_discplina']) ? $_POST['sigla_discplina'] : null),
            3 => (isset($_POST['rg']) ? $_POST['rg'] : null),
            4 => (isset($_POST['cpf']) ? $_POST['cpf'] : null),
            5 => (isset($_POST['atuacao']) ? $_POST['atuacao'] : null),
            6 => (isset($_POST['nascimento']) ? $_POST['nascimento'] : null)
        ];

        // BUSCA MATRICULA DO PROFESSOR CADASTRADO
        $sql_mat = "SELECT MAX(matricula) from usuario where tipo = 'professor'";
        $mat = mysqli_query($conn, $sql_mat);
        $mat = $mat->fetch_assoc();
        $mat = $mat['MAX(matricula)'];

        //CADASTRA PROFESSOR
        $sql_prof = "INSERT INTO professor(matricula, disciplica, sigla_disc, rg, cpf, atuacao, nascimento) 
                    VALUES ('$mat', '$usuario[1]','$usuario[2]','$usuario[3]','$usuario[4]','$usuario[5]','$usuario[6]')";
        if(!mysqli_query($conn, $sql_prof)){
            echo "ERRO NO CADASTRO DE PROFESSOR!";
            echo "Alguma coisa deu errado no banco :O";
        }

    }else if($tipo == 'turma'){

    }
/*
    $matricula = (isset($_POST['cod']) ? $_POST['cod'] : null);
    $senha = (isset($_POST['senha']) ? $_POST['senha'] : null);

    $sql = "select matricula, tipo, nome, senha from usuario where matricula = $matricula";
*/
?>