<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost:8080/TCC_II");
    }

    include_once '../../conection/conect.php';

    // Pega informação do tipo de cadastro + senha generica
    $tipo = (isset($_POST['tipo']) ? $_POST['tipo'] : null);

    if($tipo == 'professor' || $tipo == 'aluno'){
        $senha = '123qwe';
        $nome = (isset($_POST['nome']) ? $_POST['nome'] : null);
        
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
        $sql_user = "INSERT INTO usuario(tipo, senha, nome) VALUES ('$tipo', '$senha', '$nome');";
        if(!mysqli_query($conn, $sql_user)){
            echo "ERRO NO CADASTRO DE USUÁRIO!";
            echo "Alguma coisa deu errado no banco :O";
        }
        // BUSCA MATRICULA DO USUARIO CADASTRADO
        $sql_mat = "SELECT MAX(matricula) from usuario where tipo = '$tipo'";
        $mat = mysqli_query($conn, $sql_mat);
        $mat = $mat->fetch_assoc();
        $mat = $mat['MAX(matricula)'];

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

    }   
   

    if($tipo == 'aluno'){
        $usuario = [
            0 => (isset($_POST['turma']) ? $_POST['turma'] : null),
            1 => (isset($_POST['mae']) ? $_POST['mae'] : null),
            2 => (isset($_POST['pai']) ? $_POST['pai'] : null),
            3 => (isset($_POST['nascimento']) ? $_POST['nascimento'] : null),
            4 => (isset($_POST['rg']) ? $_POST['rg'] : null)
        ];      
        
        //CADASTRA ALUNO
        $sql_prof = "INSERT INTO aluno(matricula, turma, mae, pai, nascimento, rg) 
                    VALUES ('$mat', '$usuario[0]','$usuario[1]','$usuario[2]','$usuario[3]','$usuario[4]')";
        if(!mysqli_query($conn, $sql_prof)){
            echo "ERRO NO CADASTRO DE ALUNO!";
            echo "Alguma coisa deu errado no banco :O";
        }

        $responsavel = [
            0 => (isset($_POST['nome_resp']) ? $_POST['nome_resp'] : null),
            1 => (isset($_POST['rg_resp']) ? $_POST['rg_resp'] : null),
            2 => (isset($_POST['cpf_resp']) ? $_POST['cpf_resp'] : null),
            3 => (isset($_POST['tel_resp']) ? $_POST['tel_resp'] : null),
            4 => (isset($_POST['cel_resp']) ? $_POST['cel_resp'] : null),
            5 => (isset($_POST['email_resp']) ? $_POST['email_resp'] : null)
        ]; 

        //CADASTRA RESPONSAVEL
        $sql_prof = "INSERT INTO responsavel(matricula, nome, rg, cpf, telefone, celular, email) 
                    VALUES ('$mat', '$responsavel[0]','$responsavel[1]','$responsavel[2]','$responsavel[3]','$responsavel[4]','$responsavel[5]')";
        if(!mysqli_query($conn, $sql_prof)){
            echo "ERRO NO CADASTRO DE RESPONSAVEL!";
            echo "Alguma coisa deu errado no banco :O";
        }

        //busca matérias do aluno
        $disciplina = "SELECT disciplina_sigla1, disciplina_sigla2, disciplina_sigla3, disciplina_sigla4, disciplina_sigla5, disciplina_sigla6, disciplina_sigla7
                         FROM turma_disciplinas where sigla_turma = '$usuario[0]'";
        $disciplina = mysqli_query($conn, $disciplina);

        $aux = 0;
        if($disciplina->num_rows > 0){
            while($v = $disciplina->fetch_assoc()){
                $disciplinas[$aux] = $v['disciplina_sigla1'];
                $aux = $aux + 1; 
                $disciplinas[$aux] = $v['disciplina_sigla2'];
                $aux = $aux + 1; 
                $disciplinas[$aux] = $v['disciplina_sigla3'];
                $aux = $aux + 1; 
                $disciplinas[$aux] = $v['disciplina_sigla4'];
                $aux = $aux + 1; 
                if(!empty($v['disciplina_sigla5'])){
                    $disciplinas[$aux] =$v['disciplina_sigla5'];
                }
                $aux = $aux + 1;
                if(!empty($v['disciplina_sigla6'])){
                    $disciplinas[$aux] =$v['disciplina_sigla6'];
                }
                $aux = $aux + 1;
                if(!empty($v['disciplina_sigla7'])){
                    $disciplinas[$aux] =$v['disciplina_sigla7'];
                }
                $aux = $aux + 1;
            }
        }
        $x = "";
        for($i = 0; $i < count($disciplinas); $i++){
            if($i == count($disciplinas)-1){
                $x = $x."('$usuario[0]', '$disciplinas[$i]', '$mat', 0)";
            }else{
                $x = $x."('$usuario[0]', '$disciplinas[$i]', '$mat', 0),";
            }
        }
        $sql = "INSERT INTO turma_faltas(sigla_turma, sigla_disc, mat_aluno, faltas) VALUES $x";
        if(!mysqli_query($conn, $sql)){
            echo "ERRO NO CADASTRO DE turma_faltas!";
            echo "Alguma coisa deu errado no banco :O";
        }

        $x = "";
        for($i = 0; $i < count($disciplinas); $i++){
            if($i == count($disciplinas)-1){
                $x = $x."('$usuario[0]', '$disciplinas[$i]', '$mat', 0, 0)";
            }else{
                $x = $x."('$usuario[0]', '$disciplinas[$i]', '$mat', 0, 0),";
            }
        }
        $sql = "INSERT INTO turma_nf_total(sigla_turma, sigla_disc, mat_aluno, falta, nota) VALUES $x";
        if(!mysqli_query($conn, $sql)){
            echo "ERRO NO CADASTRO DE turma_nf_total";
            echo "Alguma coisa deu errado no banco :O";
        }

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

        //CADASTRA PROFESSOR
        $sql_prof = "INSERT INTO professor(matricula, disciplica, sigla_disc, rg, cpf, atuacao, nascimento) 
                    VALUES ('$mat', '$usuario[1]','$usuario[2]','$usuario[3]','$usuario[4]','$usuario[5]','$usuario[6]')";
        if(!mysqli_query($conn, $sql_prof)){
            echo "ERRO NO CADASTRO DE PROFESSOR!";
            echo "Alguma coisa deu errado no banco :O";
        }

    }else if($tipo == 'turma'){
        // Pega dados da turma
        $turma = [
            0 => (isset($_POST['nome']) ? $_POST['nome'] : null),
            1 => (isset($_POST['sigla']) ? $_POST['sigla'] : null),
            2 => (isset($_POST['ano']) ? $_POST['ano'] : null)
        ];
        
        // Pega as disciplinas
        $disciplinas = [];
        for($i = 1; $i < 8; $i++){
            if(!empty($_POST['disciplina'.$i])){
                $disciplinas[$i-1] = $_POST['disciplina'.$i];
            }else{
                $disciplinas[$i-1] = '';
            }
        }
        
        // Pega dia e horário das disciplinas
        $dia = [];
        $hora = [];
        $j=0;
        for($i = 1; $i < 8; $i++){
            $dia[$j] = (isset($_POST['dia_d'.$i.'_1']) ? $_POST['dia_d'.$i.'_1'] : '');
            $hora[$j] = (isset($_POST['h_d'.$i.'_1']) ? $_POST['h_d'.$i.'_1'] : '');
            $dia[$j+1] = (isset($_POST['dia_d'.$i.'_2']) ? $_POST['dia_d'.$i.'_2'] : '');
            $hora[$j+1] = (isset($_POST['h_d'.$i.'_2']) ? $_POST['h_d'.$i.'_2'] : '');
            $j = $j + 2;
        }
        
        //Cadastra turma
        $sql_turma = "INSERT INTO  turma (sigla, nome, ano) VALUES ('$turma[1]','$turma[0]','')";
        if(!mysqli_query($conn, $sql_turma)){
            echo "ERRO NO CADASTRO DE TURMA!";
            echo "Alguma coisa deu errado no banco :O";
        }

        //Cadastra turma_disciplinas
        $sql_turma_disciplinas = "INSERT INTO  turma_disciplinas(sigla_turma, disciplina_sigla1, disciplina_sigla2, disciplina_sigla3,
            disciplina_sigla4, disciplina_sigla5, disciplina_sigla6, disciplina_sigla7,
            dia_d1_1,dia_d1_2,dia_d2_1,dia_d2_2,dia_d3_1,dia_d3_2,dia_d4_1,dia_d4_2,dia_d5_1,dia_d5_2,dia_d6_1,dia_d6_2,dia_d7_1,dia_d7_2,
            h_d1_1,h_d1_2,h_d2_1,h_d2_2,h_d3_1,h_d3_2,h_d4_1,h_d4_2,h_d5_1,h_d5_2,h_d6_1,h_d6_2,h_d7_1,h_d7_2) 
        VALUES ('$turma[1]','$disciplinas[0]','$disciplinas[1]','$disciplinas[2]','$disciplinas[3]','$disciplinas[4]','$disciplinas[5]','$disciplinas[6]',
            '$dia[0]','$dia[1]','$dia[2]','$dia[3]','$dia[4]','$dia[5]','$dia[6]','$dia[7]','$dia[8]','$dia[9]','$dia[10]','$dia[11]','$dia[12]','$dia[13]',
            '$hora[0]','$hora[1]','$hora[2]','$hora[3]','$hora[4]','$hora[5]','$hora[6]','$hora[7]','$hora[8]','$hora[9]','$hora[10]','$hora[11]','$hora[12]','$hora[13]')";
        if(!mysqli_query($conn, $sql_turma_disciplinas)){
            echo "ERRO NO CADASTRO DE DISCIPLINAS DA TURMA!";
            echo "Alguma coisa deu errado no banco :O";
        }
    }
?>