<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
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
    <body class="vh-100">
        <?php include_once '../../header_footer/header.php'?>

        <div class="container">
            <div class="apresentacao_home">
                Olá <?php echo $_SESSION["usuario"]["nome"];?>, bem vindo ao painel do Professor! A seguir, estão todas as ações que você pode executar!
            </div>
            <div class="secao_opcoes">
            <a href="../professor/turma.php?select=atividades">
                    <div class="op">
                        Atividades avaliativas
                        <span class="op_explicacao">Crie ou exclua atividades avaliativas!</span>
                    </div>
                </a>
                <a href="../professor/turma.php?select=notas">
                    <div class="op">
                        Atualização de notas
                        <span class="op_explicacao">Atualize as notas de uma turma!</span>
                    </div>
                </a>
                <a href="../professor/turma.php?select=faltas">
                    <div class="op">
                        Atualização de faltas
                        <span class="op_explicacao">Atualize as faltas de uma turma!</span>
                    </div>
                </a>
                <a href="../professor/turma.php?select=mural">
                    <div class="op">
                        Material complementar
                        <span class="op_explicacao">Adicione material complementar para sua disciplina!</span>
                    </div>
                </a>
                
            </div>
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
