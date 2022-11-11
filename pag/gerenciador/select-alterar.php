<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc");
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
    <body class="min-height-100">
        <?php include_once '../../header_footer/header.php'?>

        <div class="container">
                <p class="title_form">Altere cadastros aqui!!</p>
                <form class="borda" enctype = "multipart/form-data" form action="./alterar.php" method="POST">
                    <div class="formTurma">
                        <p>Selecione a opção que deseja alterar:</p>
                        <select onclick="selectTurma()" name="turma" id="turma">
                            <option value="a">Aluno</option>
                            <option value="p">Professor</option>
                            <!--<option value="t">Turma</option>-->
                        </select>
                        <div id="a">
                            <p id="texto-info-excluir">Matricula do aluno:</p>
                            <input class="w-100" name="info" required>
                        </div>
                        <br>
                        <button class="btn" type="submit">Continuar</button>
                    </div>
                </form>
            </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
