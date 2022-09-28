<?php
    session_start();
    if(!isset($_SESSION['cod'])){
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
            <p class="title">Mural de atividades</p>
            <table> 
                <tr class="tabela-topo">
                    <th>Disciplina</th>
                    <th>Data</th>
                    <th>Atividade</th>
                </tr>
                <tr>
                    <th>Matemática</th>
                    <th>10/10/2022</th>
                    <th>Prova</th>
                </tr>
                <tr>
                    <th>Português</th>
                    <th>20/10/2022</th>
                    <th>Trabalho em dupla </th>
                </tr>
            </table>
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
