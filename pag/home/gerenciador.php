<?php
    session_start();
    if(!isset($_SESSION["usuario"])){
        header("location: http://localhost/tcc/");
    }  

    $erro = (isset($_GET['e']) ? $_GET['e'] : 10);
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>Gerenciador</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../../css/geral/css.css">
        <link rel="stylesheet" href="../../css/todos/home_aluno-prof-geren.css">
    </head>
    <body class="min-height-100">
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
                        <span class="op_explicacao">Alterar cadastro de alunos e professores.</span>
                    </div>
                </a>
                <a href="../gerenciador/select-excluir.php">
                    <div class="op">
                        Excluir
                        <span class="op_explicacao">Excluir cadastro de alunos, professores e turmas.</span>
                    </div>
                </a>
                <a href="" class="d-none">
                    <div class="op">
                        Gerenciador
                        <span class="op_explicacao">Adicionar, alterar ou excluir um gerenciador</span>
                    </div>
                </a>
                
            </div>
            <?php if($erro == 1):?>
                <div class="sql_erro">
                    Erro no cadastro!! <br>
                    Tente novamente.
                </div>
            <?php elseif($erro == 2):?>
                <div class="sql_erro">
                    Erro na atualização das informações!! <br>
                    Tente novamente.
                </div>
            <?php elseif($erro == 0):?>
                <div class="sql_sucesso">
                    Ação realizada com sucesso!!
                </div>
            <?php endif;?>
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
