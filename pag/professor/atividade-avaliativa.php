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
            <p class="turma">Selecione uma turma:</p>
            <select name="turma" id="turma">
                <option value="turma1">Turma 1</option>
                <option value="turma2">Turma 2</option>
            </select>
            <p class="turma">Turma: xxxxx</p>
            <form enctype = "multipart/form-data" form action="./pag/avalia_login.php?infos=atividadesAvaliativas" method="POST">
                <input class="d-none" name="atividade" id="atividade" placeholder="nome da atividade" value="COLOCAR A TURMA AQUI" required>
                Nome da atividade: <br>
                <input class="input" name="atividade" id="atividade" placeholder="nome da atividade" required> <br>    
                Sigla: <br>
                <input class="input" name="sigla" id="sigla" placeholder="NDA" required > <br>
                Valor: <br>
                <input class="input" name="valor" id="valor" placeholder="30" required > <br>
                Data: <br>
                <input class="input" name="data" id="data" required placeholder="30/10/22" type="date">
                <br>
                <button class="btn" type="submit">Submeter</button>
            </form>

        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
