<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
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
                Olá <?php echo $_SESSION["usuario"]["nome"];?>, bem vindo ao painel do Gerenciador! A seguir, estão todas as ações que você pode executar!
            </div>
            <div class="secao_opcoes">
                <a href="../gerenciador/cadastro.php">
                    <div class="op">
                        Cadastrar
                        <span class="op_explicacao">Realizar cadastro de alunos, professores e turmas.</span>
                    </div>
                </a>
                <a href="../gerenciador/select-alterar.php">
                    <div class="op">
                        Alterar
                        <span class="op_explicacao">Alterar cadastro de alunos, professores e turmas.</span>
                    </div>
                </a>
                <a href="../gerenciador/select-excluir.php">
                    <div class="op">
                        Excluir
                        <span class="op_explicacao">Excluir cadastro de alunos, professores e turmas.</span>
                    </div>
                </a>
                <a href="">
                    <div class="op">
                        Gerenciador
                        <span class="op_explicacao">Adicionar um novo gerenciador</span>
                    </div>
                </a>
                
            </div>
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
