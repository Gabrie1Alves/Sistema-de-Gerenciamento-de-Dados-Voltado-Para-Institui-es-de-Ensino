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
        <link rel="stylesheet" href="../../css/todos/aluno.css">
    </head>
    <body>
        <?php include_once '../../header_footer/header.php'?>

        <div class="container">
            <p class="title">Notas e faltas</p>
            <table>
                <p class="disciplina">Matemática</p>
                <tr class="tabela-topo">
                    <th>AV1</th>
                    <th>AV2</th>
                    <th>AV3</th>
                    <th>AV4</th>
                    <th>Total</th>
                    <th>Faltas</th>
                </tr>
                <tr>
                    <th>13/20</th>
                    <th>18/20</th>
                    <th>10/20</th>
                    <th>30/40</th>
                    <th>71</th>
                    <th>04</th>
                </tr>

            </table>

        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
