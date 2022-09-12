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
                <button onclick="select_op_professor('disciplina')" class="select">Disciplina</button>
                <button onclick="select_op_professor('horario')" class="select">Turma</button>
            </div>
            <form id="aluno" enctype = "multipart/form-data" form action="" method="POST">
                <p>Cadastre um novo aluno aqui!</p>
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

            <form id="professor" class="d-none" enctype = "multipart/form-data" form action="" method="POST">
                <p>Cadastre um novo professor aqui!</p>
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

            <form id="disciplina" class="d-none" enctype = "multipart/form-data" form action="" method="POST">
                <p>Cadastre uma nova disciplina aqui</p>
                Selecione as atividades que deseja excluir: <br>
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

            <form id="horario" class="d-none" enctype = "multipart/form-data" form action="" method="POST">
                <p>Cadastre uma nova turma aqui</p>
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

        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
