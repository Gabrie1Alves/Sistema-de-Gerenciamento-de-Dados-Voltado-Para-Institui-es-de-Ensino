<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
    }  
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>Título</title>

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
            <div class="selecao">
                <button onclick="select_op_professor('aluno')" class="select">Aluno</button>
                <button onclick="select_op_professor('professor')" class="select">Professor</button>
                <button onclick="select_op_professor('disciplina')" class="select">Turma</button>
                <!-- <button onclick="select_op_professor('horario')" class="select">Grade</button> -->
            </div>
            <form id="aluno" enctype = "multipart/form-data" action="_cadastro.php" method="POST">
                <p class="title_form">Cadastre um novo aluno aqui!</p>
                <div class="borda">

                    <p class="subTitle_form">Informações do aluno</p>

                    <input class="d-none" name="tipo"  value="aluno" required>
                    Nome do aluno: <br>
                    <input class="input" name="nome" onchange="ehString('nome', 0)"  placeholder="Nome completo do aluno" required> <br>    
                    Nome do pai: <br>
                    <input class="input" name="pai" onchange="ehString('pai', 0)" placeholder="Nome completo do pai"> <br> 
                    Nome da mãe: <br>
                    <input class="input" name="mae" onchange="ehString('mae', 0)" required placeholder="Nome completo da mãe"> <br> 
                    RG: <br>
                    <input class="input" name="rg" onchange="ehRg('rg', 0)" maxlength="10" placeholder="ex.: 11.111.111" required> <br> 
                    Data de nascimento: <br>
                    <input class="input" name="nascimento" required type="date"> <br>
                    

                    Telefone: <br>
                    <input class="input" name="tel" onchange="ehTel('tel', 0)" placeholder="ex.: 34 1111-1111"> <br>
                    Celular: <br>
                    <input class="input" name="cel1" onchange="ehCel('cel1', 0)" placeholder="ex.: 34 9 1111-1111" required> <br>
                    Celularl(2): <br>
                    <input class="input" name="cel2" onchange="ehCel('cel2', 0)" placeholder="ex.: 34 9 1111-1111"> <br>
                    E-mail: <br>
                    <input class="input" name="email" type="email" placeholder="ex.: exemplo@exemplo.com" required> <br>
                    Turma: <br>
                    <input class="input" name="turma" required> <br>

                    <p class="subTitle_form">Informações do responsável</p>

                    Nome do responsável: <br>
                    <input class="input" name="nome_resp" onchange="ehString('nome_resp', 0)" placeholder="Nome completo do responsável" required> <br>
                    RG do responsável: <br>
                    <input class="input" name="rg_resp" onchange="ehRg('rg_resp', 0)" placeholder="ex.: 11.111.111" required> <br>
                    CPF do responsável: <br>
                    <input class="input" name="cpf_resp" onchange="ehCpf('cpf_resp', 0)" placeholder="ex.: 111.111.111-11" required> <br>
                    Telefone do responsável: <br>
                    <input class="input" name="tel_resp" onchange="ehTel('tel_resp', 0)" placeholder="ex.: 34 1111-1111"> <br>
                    Celular do responsável: <br>
                    <input class="input" name="cel_resp" onchange="ehCel('cel_resp', 0)" placeholder="ex.: 34 9 1111-1111" required> <br>
                    E-mail do responsável: <br>
                    <input class="input" name="email_resp" type="email" placeholder="ex.: exemplo@exemplo.com" required> <br>

                    <p class="subTitle_form">Informações de endereço</p>
                    Rua: <br>
                    <input class="input" name="rua"  required> <br>
                    Número: <br>
                    <input class="input" name="num" onchange="ehNum('num', 0)" required> <br>
                    Complemento: <br>
                    <input class="input" name="complemento" required> <br>
                    Bairro: <br>
                    <input class="input" name="bairro" required> <br>
                    Cep: <br>
                    <input class="input" name="cep" onchange="ehCep('cep', 0)" placeholder="ex.: 11.111-000" required> <br>
                    Cidade: <br>
                    <input class="input" name="cidade" onchange="ehString('cidade', 0)" required> <br>
                    Estado: <br>
                    <input class="input" name="estado" onchange="ehString('estado', 0)" required> <br>
                    País: <br>
                    <input class="input" name="pais" onchange="ehString('pais', 0)" required> <br>

                    <button class="btn" type="submit">Cadastrar</button>
                </div>
            </form>

            <form id="professor" class="d-none" enctype = "multipart/form-data" action="_cadastro.php" method="POST">
                <p class="title_form">Cadastre um novo professor aqui!</p>
                <div class="borda">
                    <p class="subTitle_form">Informações do professor</p>
                    <input class="d-none" name="tipo" value="professor" required>
                    Nome: <br>
                    <input class="input" name="nome" onchange="ehString('nome', 1)" required placeholder="Nome completo do professor"> <br>    
                    Disciplina: <br>
                    <input class="input" name="disciplina" onchange="ehString('disciplina', 1)" placeholder="ex.: Português" required> <br>  
                    Sigla da disciplina: <br>
                    <input class="input" name="sigla_discplina" placeholder="Sigla da disciplina" required> <br>  
                    RG: <br>
                    <input class="input" name="rg" onchange="ehRg('rg', 1)" placeholder="ex.: 11.111.111" required> <br>  
                    CPF: <br>
                    <input class="input" name="cpf" onchange="ehCpf('cpf', 1)" placeholder="ex.: 111.111.111-11" required> <br>  
                    Área de atuação: <br>
                    <input class="input" name="atuacao" onchange="ehString('string', 1)" placeholder="ex.: Exatas" required> <br>  
                    Data de nascimento: <br>
                    <input class="input" name="nascimento" type="date" required> <br>  

                    <p class="subTitle_form">Informações de contato</p>
                    Telefone: <br>
                    <input class="input" name="tel" onchange="ehTel('tel', 1)" placeholder="ex.: 34 1111-1111"> <br>
                    Celular: <br>
                    <input class="input" name="cel1" onchange="ehCel('cel1', 1)" placeholder="ex.: 34 9 1111-1111" required> <br>
                    Celular(2): <br>
                    <input class="input" name="cel2" onchange="ehCel('cel2', 1)" placeholder="ex.: 34 9 1111-1111"> <br>
                    E-mail: <br>
                    <input class="input" name="email" type="email" placeholder="ex.: exemplo@exemplo.com" required> <br>

                    <p class="subTitle_form">Informações de endereço</p>
                    Rua: <br>
                    <input class="input" name="rua" required> <br>
                    Número: <br>
                    <input class="input" name="num" onchange="ehNum('num', 1)" required> <br>
                    Complemento: <br>
                    <input class="input" name="complemento" required> <br>
                    Bairro: <br>
                    <input class="input" name="bairro" required> <br>
                    Cep: <br>
                    <input class="input" name="cep"onchange="ehCep('cep', 1)" placeholder="ex.: 11.111-000" required> <br>
                    Cidade: <br>
                    <input class="input" name="cidade"onchange="ehString('cidade', 1)" required> <br>
                    Estado: <br>
                    <input class="input" name="estado"onchange="ehString('estado', 1)" required> <br>
                    País: <br>
                    <input class="input" name="pais"onchange="ehString('pais', 1)" required> <br>

                    <button class="btn" type="submit">Cadastrar</button>
                </div>
            </form>

            <form id="disciplina" class="d-none" enctype = "multipart/form-data" action="_cadastro.php" method="POST">
                <p class="title_form">Cadastre uma nova turma aqui</p>
                <div class="borda">
                    <p class="subTitle_form">Informações da turma</p>
                    <input class="d-none" name="tipo"  value="turma" required>

                    Nome da turma: <br>
                    <input class="input" name="nome" placeholder="Nome da turma" required> <br>    
                    Sigla da turma: <br>
                    <input class="input" name="sigla" placeholder="Sigla da turma" required> <br>  
                    Ano de criação: <br>
                    <input class="input" name="ano" type="date" required> <br> 
                    Sigla disciplina 1: <br>
                    <input class="input" name="disciplina1" required> <br> 
                    Sigla disciplina 2: <br>
                    <input class="input" name="disciplina2" required> <br> 
                    Sigla disciplina 3: <br>
                    <input class="input" name="disciplina3" required> <br> 
                    Sigla disciplina 4: <br>
                    <input class="input" name="disciplina4" required> <br> 
                    Sigla disciplina 5: <br>
                    <input class="input" name="disciplina5"> <br> 
                    Sigla disciplina 6: <br>
                    <input class="input" name="disciplina6"> <br> 
                    Sigla disciplina 7: <br>
                    <input class="input" name="disciplina7"> <br> 

                    <p class="subTitle_form">Dia e horario das disciplinas</p>
                    Dias de aula da disciplina 1 e horario: <br>
                    <input required class="input" name="dia_d1_1" placeholder="ex:segunda"> <br>
                    <input required class="input" name="h_d1_1" type="time"> <br>
                    <input required class="input" name="dia_d1_2" placeholder="ex:sexta"> <br>
                    <input required class="input" name="h_d1_2" type="time"> <br>

                    Dias de aula da disciplina 2 e horario: <br>
                    <input required class="input" name="dia_d2_1" placeholder="ex:segunda"> <br>
                    <input required class="input" name="h_d2_1" type="time"> <br>
                    <input required class="input" name="dia_d2_2" placeholder="ex:sexta"> <br>
                    <input required class="input" name="h_d2_2" type="time"> <br>

                    Dias de aula da disciplina 3 e horario: <br>
                    <input required class="input" name="dia_d3_1" placeholder="ex:segunda"> <br>
                    <input required class="input" name="h_d3_1" type="time"> <br>
                    <input required class="input" name="dia_d3_2" placeholder="ex:sexta"> <br>
                    <input required class="input" name="h_d3_2" type="time"> <br>

                    Dias de aula da disciplina 4 e horario: <br>
                    <input required class="input" name="dia_d4_1" placeholder="ex:segunda"> <br>
                    <input required class="input" name="h_d4_1" type="time"> <br>
                    <input required class="input" name="dia_d4_2" placeholder="ex:sexta"> <br>
                    <input required class="input" name="h_d4_2" type="time"> <br>

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

                    <button class="btn" type="submit">Cadastrar</button>
                </div>
            </form>

            

        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
