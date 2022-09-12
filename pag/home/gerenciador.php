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
                Olá {{nome}}, bem vindo ao painel do Gerenciador! A seguir, estão todas as ações que você pode executar!
            </div>
            <div class="secao_opcoes">
                <a href="../gerenciador/cadastro.php">
                    <div class="op">
                        Cadastrar
                        <span class="op_explicacao">Suspendisse sapien nisl, ultrices semper nulla sit amet</span>
                    </div>
                </a>
                <a href="../gerenciador/alterar.php">
                    <div class="op">
                        Alterar
                        <span class="op_explicacao">Suspendisse sapien nisl, ultrices semper nulla sit amet</span>
                    </div>
                </a>
                <a href="">
                    <div class="op">
                        Cadastrar professor
                        <span class="op_explicacao">Suspendisse sapien nisl, ultrices semper nulla sit amet</span>
                    </div>
                </a>
                <a href="">
                    <div class="op">
                        Cadastrar disciplina
                        <span class="op_explicacao">Suspendisse sapien nisl, ultrices semper nulla sit amet</span>
                    </div>
                </a>
                <a href="">
                    <div class="op">
                        Cadastrar horário de aula
                        <span class="op_explicacao">Suspendisse sapien nisl, ultrices semper nulla sit amet</span>
                    </div>
                </a>
                <a href="">
                    <div class="op">
                        Alterar cadastro de aluno
                        <span class="op_explicacao">Suspendisse sapien nisl, ultrices semper nulla sit amet</span>
                    </div>
                </a>
                <a href="">
                    <div class="op">
                        Alterar cadastro de professor
                        <span class="op_explicacao">Suspendisse sapien nisl, ultrices semper nulla sit amet</span>
                    </div>
                </a>
                <a href="">
                    <div class="op">
                        Alterar cadastro de disciplina
                        <span class="op_explicacao">Suspendisse sapien nisl, ultrices semper nulla sit amet</span>
                    </div>
                </a>
                <a href="">
                    <div class="op">
                        Alterar horário de aula
                        <span class="op_explicacao">Suspendisse sapien nisl, ultrices semper nulla sit amet</span>
                    </div>
                </a>
                
            </div>
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
