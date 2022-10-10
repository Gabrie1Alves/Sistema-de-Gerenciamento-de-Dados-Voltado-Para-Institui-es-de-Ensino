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

        <?php if(!isset($_POST['acao'])): ?>
            <form id="aluno" enctype = "multipart/form-data" form action="../gerenciador/alterar.php" method="POST">
                <p>Selecione a alteração desejada:</p>
                <div class="borda">
                    Alterar: <br>
                    <select onclick="teste()" id="acao" name="acao">
                        <option value="aluno">Aluno</option>
                        <option value="disciplina">Disciplina</option>
                        <option value="turma">Turma</option>
                        <option value="professor">Professor</option>
                    </select> <br>
                    <div class="ip-aluno">
                        <span id="texto-select">RG do aluno:</span><br>
                        <input class="input" name="info"  placeholder="nome da atividade" required> <br> 
                    </div>
                    
                    <button class="btn" type="submit">Submeter</button>
                </div>
            </form>
        <?php else:?>
            <?php
                $acao = $_POST['acao'];
            ?>
            <?php if($acao === 'aluno'):?>
                <form id="aluno" enctype = "multipart/form-data" form action="" method="POST">
                <p>Altere as informações do aluno aqui:</p>
                <div class="borda">
                    <input class="d-none" name="id"  placeholder="nome da atividade" value="aluno" required>
                    Nome do aluno: <br>
                    <input class="input" name="nome"  placeholder="nome da atividade" required> <br>    
                    Data de entrada: <br>
                    <input class="input" name="entrada"  required placeholder="30/10/22" type="date"> <br>
                    Cidade: <br>
                    <input class="input" name="cidade"  placeholder="nome da atividade" required> <br> 
                    Nome do pai: <br>
                    <input class="input" name="pai"  placeholder="nome da atividade" required> <br> 
                    Nome da mãe: <br>
                    <input class="input" name="mae" placeholder="nome da atividade" required> <br> 
                    RG: <br>
                    <input class="input" name="rg" placeholder="nome da atividade" required> <br> 
                    Data de nascimento: <br>
                    <input class="input" name="nascimento" required type="date"> <br>
                    Turma: <br>
                    <input class="input" name="turma" required> <br>
                    <button class="btn" type="submit">Submeter</button>
                </div>
                </form>
            <?php endif;?>
            <?php if($acao == 'disciplina'):?>
                <form id="disciplina"  enctype = "multipart/form-data" form action="" method="POST">
                <p>Altere as informações da disciplina aqui</p>
                <div class="borda">
                    <input class="d-none" name="id" placeholder="nome da atividade" value="professor" required>
                    Nome: <br>
                    <input class="input" name="nome" placeholder="nome da atividade" required> <br>    
                    Sigla: <br>
                    <input class="input" name="atuacao" placeholder="nome da atividade" placeholder="Exatas" required> <br>  
                    Responsável: <br>
                    <input class="input" name="entrada" placeholder="nome da atividade" required> <br>  

                    <button class="btn" type="submit">Submeter</button>
                </div>
                </form>
            <?php endif;?>
            <?php if($acao == 'turma'):?>
                <form id="horario"  enctype = "multipart/form-data" form action="" method="POST">
                <p>Altere as informações da turma aqui</p>
                Selecione as atividades que deseja excluir: <br>
                <div class="borda">
                    <input class="d-none" name="id" placeholder="nome da atividade" value="professor" required>
                    Nome da turma: <br>
                    <input class="input" name="nome" placeholder="nome da atividade" required> <br>    
                    Sigla da turma: <br>
                    <input class="input" name="atuacao" placeholder="nome da atividade" placeholder="Exatas" required> <br>  
                    Insira as siglas das disciplinas: <br>
                    <input class="input" name="entrada" placeholder="Ex: pt, mt, qm, ef" required> <br>  

                    <button class="btn" type="submit">Submeter</button>
                </div>
                </form>
            <?php endif;?>
            <?php if($acao == 'professor'):?>
                <form id="professor"  enctype = "multipart/form-data" form action="" method="POST">
                <p>Altere as informações do professor aqui!</p>
                <div class="borda">
                    <input class="d-none" name="id" placeholder="nome da atividade" value="professor" required>
                    Nome: <br>
                    <input class="input" name="nome" placeholder="nome da atividade" required> <br>    
                    Area de atuação: <br>
                    <input class="input" name="atuacao" placeholder="nome da atividade" placeholder="Exatas" required> <br>  
                    Data de entrada: <br>
                    <input class="input" name="entrada" type="date" placeholder="nome da atividade" required> <br>  
                    RG: <br>
                    <input class="input" name="rg" placeholder="nome da atividade" required> <br>  
                    CPF: <br>
                    <input class="input" name="cpf" placeholder="nome da atividade" required> <br>  
                    Cidade: <br>
                    <input class="input" name="cidade" placeholder="nome da atividade" required> <br>  
                    Data de nascimento: <br>
                    <input class="input" name="nascimento" type="date" placeholder="nome da atividade" required> <br>  

                    <button class="btn" type="submit">Submeter</button>
                </div>
            </form>
            <?php endif;?>
        <?php endif;?>

        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
