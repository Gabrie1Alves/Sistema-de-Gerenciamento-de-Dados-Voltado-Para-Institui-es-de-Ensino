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
                <p>Exclua cadastros aqui!!</p>
                <form enctype = "multipart/form-data" form action="./excluir.php" method="POST">
                    <div class="formTurma">
                        <p>Selecione a opção que deseja alterar:</p>
                        <select onclick="selectTurma()" name="turma" id="turma">
                            <option value="a">Aluno</option>
                            <option value="p">Professor</option>
                            <option value="t">Turma</option>
                        </select>
                        <div id="a" class="d-none">
                            <p>Matricula do aluno:</p>
                            <input name="info">
                        </div>
                        <div id="p" class="d-none">
                            <p>Matricula do professor:</p>
                            <input name="info">
                        </div>
                        <div id="t" class="d-none">
                            <p>Nome da turma:</p>
                            <input name="info">
                        </div>
                        <br>
                        <button class="btn" type="submit">Continuar</button>
                    </div>
                </form>
            </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
