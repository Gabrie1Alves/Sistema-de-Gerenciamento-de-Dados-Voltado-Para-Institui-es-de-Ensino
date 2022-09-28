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
        <link rel="stylesheet" href="../../css/todos/home_aluno-prof-geren.css">
    </head>
    <body>
        <?php include_once '../../header_footer/header.php'?>

        <div class="container">
            <div class="apresentacao_home">
                Olá {{nome}}, bem vindo ao painel do Aluno! A seguir, estão todas as ações que você pode executar!
            </div>
            <div class="secao_opcoes">
                <a href="../aluno/view-infos.php">
                    <div class="op">
                        Visualizar notas e faltas
                        <span class="op_explicacao">Suspendisse sapien nisl, ultrices semper nulla sit amet</span>
                    </div>
                </a>

                <a href="../aluno/atividades.php">
                    <div class="op">
                        Mural de atividades
                        <span class="op_explicacao">Suspendisse sapien nisl, ultrices semper nulla sit amet</span>
                    </div>
                </a>

                <a href="../aluno/horario.php">
                    <div class="op">
                        Horário
                        <span class="op_explicacao">Suspendisse sapien nisl, ultrices semper nulla sit amet</span>
                    </div>
                </a>
            </div>
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
