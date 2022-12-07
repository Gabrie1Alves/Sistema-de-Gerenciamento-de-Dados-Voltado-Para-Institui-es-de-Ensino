<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
    }  
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>Aluno</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../../css/geral/css.css">
        <link rel="stylesheet" href="../../css/todos/home_aluno-prof-geren.css">
    </head>
    <body class="min-height-100">
        <?php include_once '../../header_footer/header.php'?>

        <div class="container">
            <div class="apresentacao_home">
                Olá <?php echo $_SESSION["usuario"]["nome"];?>, bem vindo ao painel do Aluno! A seguir, estão todas as ações que você pode executar!
            </div>
            <div class="secao_opcoes">
                <a href="../aluno/notas-faltas.php">
                    <div class="op">
                        Visualizar notas e faltas
                        <span class="op_explicacao">Visualize suas notas e faltas nas disciplinas</span>
                    </div>
                </a>

                <a href="../aluno/material.php">
                    <div class="op">
                        Material complementar
                        <span class="op_explicacao">Visualize materias complementares para estudos</span>
                    </div>
                </a>

                <a href="../aluno/horario.php">
                    <div class="op">
                        Horário
                        <span class="op_explicacao">Visualize os horários das disciplinas</span>
                    </div>
                </a>

                <a href="../aluno/atividades.php">
                    <div class="op">
                        Atividades avaliativas
                        <span class="op_explicacao">Visualize as atividades avaliativas</span>
                    </div>
                </a>
            </div>
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
