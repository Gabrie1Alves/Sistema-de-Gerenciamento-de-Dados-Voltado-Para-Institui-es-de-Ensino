<!-- atividades, notas_faltas, mural, complemento -->
<?php
    $pag = isset($_GET['select']) ? $_GET['select'] : null;
    $url = '../professor/';
    if ($pag === 'atividades'){
        $url = $url.'atividade-avaliativa.php';
    }else if ($pag === 'notas_faltas'){

    }else if ($pag === 'mural'){

    }else if ($pag === 'complemento'){

    }else{

    }
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>Título</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../../css/geral/css.css">
    </head>
    <body>
        <?php include_once '../../header_footer/header.php'?>

        <div class="container">
            <form enctype = "multipart/form-data" form action="<?= $url?>" method="POST">
                Selecione a turma que deseja trabalhar:
                <select name="turma" id="turma">
                    <option value="turma1">Turma 1</option>
                    <option value="turma2">Turma 2</option>
                </select>
                
                <button class="login_btn" type="submit">Entrar</button>
            </form>
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
