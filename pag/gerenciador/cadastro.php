<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost:8080/TCC_II");
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
                <p>Cadastre um novo aluno aqui!</p>
                <div class="borda">

                    <p>Informações do aluno</p>

                    <input class="d-none" name="tipo"  value="aluno" required>
                    Nome do aluno: <br>
                    <input class="input" name="nome"  placeholder="Nome completo" required> <br>    
                    Data de entrada: <br>
                    <input class="input" name="entrada" required type="date"> <br>
                    Nome do pai: <br>
                    <input class="input" name="pai"> <br> 
                    Nome da mãe: <br>
                    <input class="input" name="mae" required> <br> 
                    RG: <br>
                    <input class="input" name="rg" placeholder="ex: xx-11.111.111" required> <br> 
                    Data de nascimento: <br>
                    <input class="input" name="nascimento" required type="date"> <br>
                    Turma: <br>
                    <input class="input" name="turma" required> <br>

                    <p>Informações do responsável</p>

                    Nome do responsável: <br>
                    <input class="input" name="nome_resp" required> <br>
                    RG do responsável: <br>
                    <input class="input" name="rg_resp" placeholder="ex: xx-11.111.111" required> <br>
                    CPF do responsável: <br>
                    <input class="input" name="cpf_resp" placeholder="ex: 111.111.111-11" required> <br>
                    Telefone do responsável: <br>
                    <input class="input" name="tel_resp" placeholder="ex: 11 1111-1111"> <br>
                    Celular do responsável: <br>
                    <input class="input" name="cel_resp" placeholder="ex: 11 1 1111-1111" required> <br>
                    Celular do responsável(2): <br>
                    <input class="input" name="cel_resp2" placeholder="ex: 11 1 1111-1111" required> <br>
                    E-mail do responsável: <br>
                    <input class="input" name="email_resp" type="email" placeholder="ex: exemplo@exemplo.com" required> <br>

                    <p>Informações de endereço</p>
                    Rua: <br>
                    <input class="input" name="rua" required> <br>
                    Número: <br>
                    <input class="input" name="num" required> <br>
                    Complemento: <br>
                    <input class="input" name="complemento" required> <br>
                    Bairro: <br>
                    <input class="input" name="bairro" required> <br>
                    Cep: <br>
                    <input class="input" name="cep" placeholder="11.111-000" required> <br>
                    Cidade: <br>
                    <input class="input" name="cidade" required> <br>
                    Estado: <br>
                    <input class="input" name="estado" required> <br>
                    País: <br>
                    <input class="input" name="pais" required> <br>

                    <button class="btn" type="submit">Submeter</button>
                </div>
            </form>

            <form id="professor" class="d-none" enctype = "multipart/form-data" action="_cadastro.php" method="POST">
                <p>Cadastre um novo professor aqui!</p>
                <div class="borda">
                    <p>Informações do professor</p>
                    <input class="d-none" name="tipo" value="professor" required>
                    Nome: <br>
                    <input class="input" name="nome" required> <br>    
                    Disciplina: <br>
                    <input class="input" name="disciplina" placeholder="ex: português" required> <br>  
                    Sigla da disciplina: <br>
                    <input class="input" name="sigla_discplina" placeholder="nome da atividade" required> <br>  
                    RG: <br>
                    <input class="input" name="rg" placeholder="ex: xx-11.111.111" required> <br>  
                    CPF: <br>
                    <input class="input" name="cpf" placeholder="ex: 111.111.111-11" required> <br>  
                    Área de atuação: <br>
                    <input class="input" name="atuacao" placeholder="ex: exatas" required> <br>  
                    Data de nascimento: <br>
                    <input class="input" name="nascimento" type="date" placeholder="nome da atividade" required> <br>  

                    <p>Informações de contato</p>
                    Telefone: <br>
                    <input class="input" name="tel" placeholder="ex: 11 1111-1111"> <br>
                    Celular: <br>
                    <input class="input" name="cel1" placeholder="ex: 11 1 1111-1111" required> <br>
                    Celular(2): <br>
                    <input class="input" name="cel2" placeholder="ex: 11 1 1111-1111"> <br>
                    E-mail: <br>
                    <input class="input" name="email" type="email" placeholder="ex: exemplo@exemplo.com" required> <br>

                    <p>Informações de endereço</p>
                    Rua: <br>
                    <input class="input" name="rua" required> <br>
                    Número: <br>
                    <input class="input" name="num" required> <br>
                    Complemento: <br>
                    <input class="input" name="complemento" required> <br>
                    Bairro: <br>
                    <input class="input" name="bairro" required> <br>
                    Cep: <br>
                    <input class="input" name="cep" placeholder="11.111-000" required> <br>
                    Cidade: <br>
                    <input class="input" name="cidade" required> <br>
                    Estado: <br>
                    <input class="input" name="estado" required> <br>
                    País: <br>
                    <input class="input" name="pais" required> <br>

                    <button class="btn" type="submit">Submeter</button>
                </div>
            </form>

            <form id="disciplina" class="d-none" enctype = "multipart/form-data" action="_cadastro.php" method="POST">
                <p>Cadastre uma nova turma aqui</p>
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

                    <button class="btn" type="submit">Cadastrar</button>
                </div>
            </form>

            

        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
