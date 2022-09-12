<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>Título</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../../css/geral/css.css">
        <link rel="stylesheet" href="../../css/todos/professor.css">

    </head>
    <body>
        <?php include_once '../../header_footer/header.php'?>

        <div class="container">
            <p class="titulo_nf">Atualizando notas e faltas da turma:</p>
            <form action="">
            <table class="notas_faltas"> 
                <tr class="cabecalho-t-nf">
                    <th>Alunos</th>
                    <th>AV1</th>
                    <th>AV2</th>
                    <th>AV3</th>
                    <th>TRAB1</th>
                    <th>Faltas</th>
                </tr>
                <tr>
                    <th>0001</th>
                    <th>10</th>
                    <th>10</th>
                    <th>08</th>
                    <th>07</th>
                    <th>01</th>
                </tr>
                <tr>
                    <th>0002</th>
                    <th>08</th>
                    <th>05</th>
                    <th>06</th>
                    <th>07</th>
                    <th>02</th>
                </tr>
                <tr>
                    <th>0003</th>
                    <th>02</th>
                    <th>01</th>
                    <th>10</th>
                    <th>09</th>
                    <th>06</th>
                </tr>
            </table>
            </form>

        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
