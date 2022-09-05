<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>Título</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../../css/geral/css.css">
        <link rel="stylesheet" href="../../css/todos/professor.css">

        <!-- JS -->
        <script type="text/javascript" src="../../js_jquery/professor.js"></script>

        <!-- jQuery -->
        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous">
        </script>
    </head>
    <body>
        <?php include_once '../../header_footer/header.php'?>

        <div class="container">
            <div class="selecao">
                <button onclick="select_op_professor('criar')" class="select">Criar</button>
                <button onclick="select_op_professor('alterar')" class="select">Alterar</button>
                <button onclick="select_op_professor('excluir')" class="select">Excluir</button>
            </div>
            <form id="criar" enctype = "multipart/form-data" form action="./pag/avalia_login.php?infos=atividadesAvaliativas" method="POST">
                <p>Crie uma atividade aqui!</p>
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

            <form id="alterar" class="d-none" enctype = "multipart/form-data" form action="./pag/avalia_login.php?infos=atividadesAvaliativas" method="POST">
                <p>Altere uma atividade aqui!</p>
                <input class="d-none" name="atividade" id="atividade" placeholder="nome da atividade" value="COLOCAR A TURMA AQUI" required>
                Nome da atividade: <br>
                <!-- <input class="input" name="atividade" id="atividade" placeholder="nome da atividade" required> <br>     -->
                <select class="input" name="select">
                    <option value="valor1">Valor 1</option>
                    <option value="valor2" selected>Valor 2</option>
                    <option value="valor3">Valor 3</option>
                </select>
                Sigla: <br>
                <input class="input" name="sigla" id="sigla" placeholder="NDA" required > <br>
                Valor: <br>
                <input class="input" name="valor" id="valor" placeholder="30" required > <br>
                Data: <br>
                <input class="input" name="data" id="data" required placeholder="30/10/22" type="date">
                <br>
                <button class="btn" type="submit">Submeter</button>
            </form>

            <form id="excluir" class="d-none" enctype = "multipart/form-data" form action="./pag/avalia_login.php?infos=atividadesAvaliativas" method="POST">
                <p>Exclua atividades aqui!</p>
                Selecione as atividades que deseja excluir: <br>
                
                <div class="p-b">
                    <input type = "checkbox" name = "at1">
                    <label> AV1 </label>
                </div>
                <div class="p-b">
                    <input type = "checkbox" name = "at2">
                    <label> AV1 </label>
                </div>
                
                <button class="btn" type="submit">Submeter</button>
            </form>

        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
