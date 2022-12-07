<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
    }  
    include_once '../../conection/conect.php';
// pega informação que vai alterar: a, p, t

    $tipo = isset($_POST['turma']) ? $_POST['turma'] : null;
    $info = isset($_POST['info']) ? $_POST['info'] : null;

    $alterar = isset($_POST['turma']) ? $_POST['turma'] : null;
    if($tipo != 'a' && $tipo != 'p' && $tipo != 't'){
        header("location: http://localhost/tcc/pag/gerenciador/select-alterar.php");
    }
// busca informações a serem alteradas:
    $nome = "SELECT nome FROM usuario where matricula = '$info'";
    $nome = mysqli_query($conn, $nome);
    $nome = $nome->fetch_assoc();
    if($tipo == 'a'){
        $sql[0] = "SELECT * FROM aluno where matricula = '$info'";//aluno
        $sql[1] = "SELECT * FROM endereco where matricula = '$info'";//aluno
        $sql[2] = "SELECT * FROM contato where matricula = '$info'";//aluno
        $sql[3] = "SELECT * FROM responsavel where matricula = '$info'";//aluno
        $aluno = mysqli_query($conn, $sql[0]);
        $aluno = $aluno->fetch_assoc();

        $endereco = mysqli_query($conn, $sql[1]);
        $endereco = $endereco->fetch_assoc();

        $contato = mysqli_query($conn, $sql[2]);
        $contato = $contato->fetch_assoc();

        $responsavel = mysqli_query($conn, $sql[3]);
        $responsavel = $responsavel->fetch_assoc();
    }else if($tipo == 'p'){
        $sql[0] = "SELECT * FROM professor where matricula = '$info'";//professor
        $sql[1] = "SELECT * FROM endereco where matricula = '$info'";//professor
        $sql[2] = "SELECT * FROM contato where matricula = '$info'";//professor
        $professor = mysqli_query($conn, $sql[0]);
        $professor = $professor->fetch_assoc();

        $endereco = mysqli_query($conn, $sql[1]);
        $endereco = $endereco->fetch_assoc();

        $contato = mysqli_query($conn, $sql[2]);
        $contato = $contato->fetch_assoc();
    }
    /*else{

    }*/
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>Alteração de cadastro</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../../css/geral/css.css">
        <link rel="stylesheet" href="../../css/todos/gerenciador.css">

        <!-- JS -->
        <script type="text/javascript" src="../../js_jquery/gerenciador.js"></script>
        <script type="text/javascript" src="../../js_jquery/verify.js"></script>

        <!-- jQuery -->
        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous">
        </script>
    </head>
    <body>
        <?php include_once '../../header_footer/header.php'?>

        <div class="container">
            <?php if($alterar == 'a'):?>
                <form id="aluno" enctype = "multipart/form-data" form action="./_alterar.php" method="POST">
                    <p class="title_form">Alterar informações do aluno</p>
                    <div class="borda">

                    <p class="subTitle_form">Informações do aluno</p>

                    <input class="d-none" name="tipo"  value="aluno" required>
                    <input class="d-none" name="matricula" value="<?=$info?>" required> <br>

                    Nome do aluno: <br>
                    <input class="input" name="nome" value="<?=$nome['nome']?>"  placeholder="Nome completo" disabled="true" required disable> <br>   
                    Matricula do aluno: <br>
                    <input class="input" name="matricula_" value="<?=$info?>"  placeholder="Nome completo" disabled="true" required disable> <br>   
                    Nome do pai: <br>
                    <input class="input" disabled="true" onchange="ehString('pai', 0)" value="<?=$aluno['pai']?>" name="pai"> <br> 
                    Nome da mãe: <br>
                    <input class="input" name="mae" disabled="true" onchange="ehString('mae', 0)" value="<?=$aluno['mae']?>" required> <br> 
                    RG: <br>
                    <input class="input" name="rg" disabled="true" onchange="ehRg('rg', 0)" value="<?=$aluno['rg']?>" placeholder="ex: xx-11.111.111" required> <br> 
                    Data de nascimento: <br>
                    <input class="input" name="nascimento" disabled="true" value="<?=$aluno['nascimento']?>" required type="date"> <br>


                    Telefone: <br>
                    <input class="input" name="tel" onchange="ehTel('tel', 0)" value="<?=$contato['telefone']?>" placeholder="ex: 11 1111-1111"> <br>
                    Celular: <br>
                    <input class="input" name="cel1" onchange="ehCel('cel1', 0)" value="<?=$contato['cel1']?>" placeholder="ex: 11 1 1111-1111" required> <br>
                    Celularl(2): <br>
                    <input class="input" name="cel2" onchange="ehCel('cel2', 0)" value="<?=$contato['cel2']?>" placeholder="ex: 11 1 1111-1111"> <br>
                    E-mail: <br>
                    <input class="input" name="email" type="email" value="<?=$contato['email']?>" placeholder="ex: exemplo@exemplo.com" required> <br>
                    Turma: <br>
                    <input class="input" name="turma" value="<?=$aluno['turma']?>" required> <br>

                    <p class="subTitle_form">Informações do responsável</p>

                    Nome do responsável: <br>
                    <input class="input" name="nome_resp" onchange="ehString('nome_resp', 0)" value="<?=$responsavel['nome']?>" required> <br>
                    RG do responsável: <br>
                    <input class="input" name="rg_resp" onchange="ehRg('rg_resp', 0)" value="<?=$responsavel['rg']?>" placeholder="ex: xx-11.111.111" required> <br>
                    CPF do responsável: <br>
                    <input class="input" name="cpf_resp" onchange="ehCpf('cpf_resp', 0)" value="<?=$responsavel['cpf']?>" placeholder="ex: 111.111.111-11" required> <br>
                    Telefone do responsável: <br>
                    <input class="input" name="tel_resp" onchange="ehTel('tel_resp', 0)" value="<?=$responsavel['telefone']?>" placeholder="ex: 11 1111-1111"> <br>
                    Celular do responsável: <br>
                    <input class="input" name="cel_resp" onchange="ehCel('cel_resp', 0)" value="<?=$responsavel['celular']?>" placeholder="ex: 11 1 1111-1111" required> <br>
                    E-mail do responsável: <br>
                    <input class="input" name="email_resp" value="<?=$responsavel['email']?>" type="email" placeholder="ex: exemplo@exemplo.com" required> <br>

                    <p class="subTitle_form">Informações de endereço</p>
                    Rua: <br>
                    <input class="input" value="<?=$endereco['rua']?>" name="rua" required> <br>
                    Número: <br>
                    <input class="input" onchange="ehNum('num', 0)" value="<?=$endereco['numero']?>" name="num" required> <br>
                    Complemento: <br>
                    <input class="input" value="<?=$endereco['complemento']?>" name="complemento" required> <br>
                    Bairro: <br>
                    <input class="input" value="<?=$endereco['bairro']?>" name="bairro" required> <br>
                    Cep: <br>
                    <input class="input" onchange="ehCep('cep', 0)" value="<?=$endereco['cep']?>" name="cep" placeholder="11.111-000" required> <br>
                    Cidade: <br>
                    <input class="input" onchange="ehString('cidade', 0)" value="<?=$endereco['cidade']?>" name="cidade" required> <br>
                    Estado: <br>
                    <input class="input" onchange="ehString('cidade', 0)" value="<?=$endereco['estado']?>" name="estado" required> <br>
                    País: <br>
                    <input class="input" onchange="ehString('cidade', 0)" value="<?=$endereco['pais']?>" name="pais" required> <br>

                    <button class="btn" type="submit">Submeter</button>
                    </div>
                </form>
            
            <?php elseif($alterar == 'p'): ?>
                <form id="professor" enctype = "multipart/form-data" action="./_alterar.php" method="POST">
                    <p class="title_form">Altere as informações do professor aqui:</p>
                    <div class="borda">
                        <p class="subTitle_form">Informações do professor</p>
                        <input class="d-none" name="tipo" value="professor" required>
                        <input class="d-none" name="matricula" value="<?=$info?>" required> <br>

                        Nome do professor: <br>
                        <input class="input" name="nome" value="<?=$nome['nome']?>"  placeholder="Nome completo" disabled="true" required disable> <br>   
                        Matricula do professor: <br>
                        <input class="input" name="matricula_" value="<?=$info?>"  placeholder="Nome completo" disabled="true" required disable> <br>     
                        Disciplina: <br>
                        <input class="input" name="atuacao" onchange="ehString('atuacao', 1)" value="<?=$professor['disciplica']?>"disabled="true" placeholder="ex: português" required> <br>  
                        Sigla da disciplina: <br>
                        <input class="input" name="sigla_discplina"  value="<?=$professor['sigla_disc']?>"disabled="true" placeholder="nome da atividade" required> <br>  
                        RG: <br>
                        <input class="input" name="rg" onchange="ehRg('rg', 1)"  value="<?=$professor['rg']?>"disabled="true" placeholder="ex: xx-11.111.111" required> <br>  
                        CPF: <br>
                        <input class="input" name="cpf" onchange="ehCpf('cpf', 1)"  value="<?=$professor['cpf']?>"disabled="true" placeholder="ex: 111.111.111-11" required> <br>  
                        Área de atuação: <br>
                        <input class="input" name="area_atuacao" onchange="ehString('area_atuacao', 1)"  value="<?=$professor['atuacao']?>"disabled="true" placeholder="ex: exatas" required> <br>  
                        Data de nascimento: <br>
                        <input class="input" name="nascimento"  value="<?=$professor['nascimento']?>"disabled="true" type="date" placeholder="nome da atividade" required> <br>  

                        <p class="subTitle_form">Informações de contato</p>
                        Telefone: <br>
                        <input class="input" onchange="ehTel('tel', 1)" value="<?=$contato['telefone']?>" name="tel"  placeholder="ex: 11 1111-1111"> <br>
                        Celular: <br>
                        <input class="input" onchange="ehCel('cel1', 1)" value="<?=$contato['cel1']?>" name="cel1" placeholder="ex: 11 1 1111-1111" required> <br>
                        Celular(2): <br>
                        <input class="input" onchange="ehCel('cel2', 1)" value="<?=$contato['cel2']?>" name="cel2" placeholder="ex: 11 1 1111-1111" required> <br>
                        E-mail: <br>
                        <input class="input" value="<?=$contato['email']?>" name="email" type="email" placeholder="ex: exemplo@exemplo.com" required> <br>

                        <p class="subTitle_form">Informações de endereço</p>
                        Rua: <br>
                        <input class="input" value="<?=$endereco['rua']?>" name="rua" required> <br>
                        Número: <br>
                        <input class="input" onchange="ehNum('num', 1)" value="<?=$endereco['numero']?>" name="num" required> <br>
                        Complemento: <br>
                        <input class="input" value="<?=$endereco['complemento']?>" name="complemento" required> <br>
                        Bairro: <br>
                        <input class="input" value="<?=$endereco['bairro']?>" name="bairro" required> <br>
                        Cep: <br>
                        <input class="input" onchange="ehCep('cep', 1)" value="<?=$endereco['cep']?>" name="cep" placeholder="11.111-000" required> <br>
                        Cidade: <br>
                        <input class="input"onchange="ehString('cidade', 1)" value="<?=$endereco['cidade']?>" name="cidade" required> <br>
                        Estado: <br>
                        <input class="input"onchange="ehString('estado', 1)" value="<?=$endereco['estado']?>" name="estado" required> <br>
                        País: <br>
                        <input class="input"onchange="ehString('pais', 1)" value="<?=$endereco['pais']?>" name="pais" required> <br>


                        <button class="btn" type="submit">Submeter</button>
                    </div>
                </form>
            <?php elseif($alterar == 't'):?>
                <form id="disciplina" enctype = "multipart/form-data" form action="" method="POST">
                    <p>Altere as informações da turma aqui:</p>
                    <div class="borda">
                        <p>Informações da turma</p>
                        <input class="d-none" name="tipo"  value="turma" required>

                        Nome da turma: <br>
                        <input class="input" name="nome" placeholder="nome da atividade" required> <br>    
                        Sigla da turma: <br>
                        <input class="input" name="atuacao" placeholder="nome da atividade" placeholder="Exatas" required> <br>  
                        Grade da turma: <br>
                        <input class="input" name="atuacao" placeholder="nome da atividade" placeholder="Exatas" required> <br> 
                        Disciplina 1: <br>
                        <input class="input" name="disciplina1" required> <br> 
                        Disciplina 2: <br>
                        <input class="input" name="disciplina2" required> <br> 
                        Disciplina 3: <br>
                        <input class="input" name="disciplina3" required> <br> 
                        Disciplina 4: <br>
                        <input class="input" name="disciplina4" required> <br> 
                        Disciplina 5: <br>
                        <input class="input" name="disciplina5"> <br> 
                        Disciplina 6: <br>
                        <input class="input" name="disciplina6"> <br> 
                        Disciplina 7: <br>
                        <input class="input" name="disciplina7"> <br> 

                        <p>Dia e horario das disciplinas</p>
                        Dias de aula da disciplina 1 e horario: <br>
                        <input class="input" name="dia_d1_1" placeholder="ex:segunda"> <br>
                        <input class="input" name="h_d1_1" type="time"> <br>
                        <input class="input" name="dia_d1_2" placeholder="ex:sexta"> <br>
                        <input class="input" name="h_d1_2" type="time"> <br>

                        Dias de aula da disciplina 2 e horario: <br>
                        <input class="input" name="dia_d2_1" placeholder="ex:segunda"> <br>
                        <input class="input" name="h_d2_1" type="time"> <br>
                        <input class="input" name="dia_d2_2" placeholder="ex:sexta"> <br>
                        <input class="input" name="h_d2_2" type="time"> <br>

                        Dias de aula da disciplina 3 e horario: <br>
                        <input class="input" name="dia_d3_1" placeholder="ex:segunda"> <br>
                        <input class="input" name="h_d3_1" type="time"> <br>
                        <input class="input" name="dia_d3_2" placeholder="ex:sexta"> <br>
                        <input class="input" name="h_d3_2" type="time"> <br>

                        Dias de aula da disciplina 4 e horario: <br>
                        <input class="input" name="dia_d4_1" placeholder="ex:segunda"> <br>
                        <input class="input" name="h_d4_1" type="time"> <br>
                        <input class="input" name="dia_d4_2" placeholder="ex:sexta"> <br>
                        <input class="input" name="h_d4_2" type="time"> <br>

                        Dias de aula da disciplina 5 e horario: <br>
                        <input class="input" name="dia_d5_1" placeholder="ex:segunda"> <br>
                        <input class="input" name="h_d5_1" type="time"> <br>
                        <input class="input" name="dia_d5_2" placeholder="ex:sexta"> <br>
                        <input class="input" name="h_d5_2" type="time"> <br>

                        Dias de aula da disciplina 6 e horario: <br>
                        <input class="input" name="dia_d6_1" placeholder="ex:segunda"> <br>
                        <input class="input" name="h_d6_1" type="time"> <br>
                        <input class="input" name="dia_d6_2" placeholder="ex:sexta"> <br>
                        <input class="input" name="h_d6_2" type="time"> <br>

                        Dias de aula da disciplina 7 e horario: <br>
                        <input class="input" name="dia_d7_1" placeholder="ex:segunda"> <br>
                        <input class="input" name="h_d7_1" type="time"> <br>
                        <input class="input" name="dia_d7_2" placeholder="ex:sexta"> <br>
                        <input class="input" name="h_d7_2" type="time"> <br>

                        <button class="btn" type="submit">Alterar</button>
                    </div>
                </form>
            <?php endif;?>
            <!-- <form id="horario" class="d-none" enctype = "multipart/form-data" form action="" method="POST">
                <p>Cadastre uma nova grade aqui</p>
                <div class="borda">
                    <p>Informações da grade</p>
                    <input class="d-none" name="tipo" value="grade" required>

                    Nome: <br>
                    <input class="input" name="nome" placeholder="nome da atividade" required> <br>    
                    
                    Dia da dis: <br>
                    <input class="input" name="atuacao" placeholder="nome da atividade" placeholder="Exatas" required> <br>  
                     

                </div>
            </form> -->

            

        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
