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
            <p class="title">Horario</p>
            <div class="disciplinas">
                <p class="disciplinas-siglas">QW - qw exemplo</p>
                <p class="disciplinas-siglas">AS - as exemplo</p>
                <p class="disciplinas-siglas">WS - ws exemplo</p>
                <p class="disciplinas-siglas">NS - ns exemplo</p>
            </div>
            <table> 
                <tr class="tabela-topo">
                    <th>----</th>
                    <th>Seg.</th>
                    <th>Ter.</th>
                    <th>Qua.</th>
                    <th>Quin.</th>
                    <th>Sex.</th>
                </tr>
                <tr>
                    <th>08:00</th>
                    <th>--</th>
                    <th>--</th>
                    <th>QW</th>
                    <th>QW</th>
                    <th>AS</th>
                </tr>
                <tr>
                    <th>09:00</th>
                    <th>NS</th>
                    <th>--</th>
                    <th>WS</th>
                    <th>QW</th>
                    <th>AS</th>
                </tr>
                <tr>
                    <th>10:00</th>
                    <th>WS</th>
                    <th>--</th>
                    <th>NS</th>
                    <th>AS</th>
                    <th>--</th>
                </tr>
            </table>
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
