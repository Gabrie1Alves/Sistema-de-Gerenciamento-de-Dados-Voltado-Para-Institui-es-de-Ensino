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
                Olá {{nome}}, bem vindo ao painel do Professor! A seguir, estão todas as ações que você pode executar!
            </div>
            <div class="secao_opcoes">
            <a href="../turma/turma.php?select=atividades">
                    <div class="op">
                        Atividades avaliativas
                        <span class="op_explicacao">Crie ou altere atividades avaliativas!</span>
                    </div>
                </a>
                <a href="../turma/turma.php?select=notas_faltas">
                    <div class="op">
                        Atualização de notas e faltas
                        <span class="op_explicacao">Suspendisse sapien nisl, ultrices semper nulla sit amet</span>
                    </div>
                </a>
                <a href="../turma/turma.php?select=mural">
                    <div class="op">
                        Mural de atividades
                        <span class="op_explicacao">Suspendisse sapien nisl, ultrices semper nulla sit amet</span>
                    </div>
                </a>
                <a href="../turma/turma.php?select=complemento">
                    <div class="op">
                        Materiais complementares
                        <span class="op_explicacao">Suspendisse sapien nisl, ultrices semper nulla sit amet</span>
                    </div>
                </a>
                
            </div>
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
