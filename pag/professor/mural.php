<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
    }  
    include_once '../../conection/conect.php';
    $turma = (isset($_POST['turma']) ? $_POST['turma'] : null);
    $sql = "SELECT * FROM turma_material WHERE sigla_turma = '$turma' and sigla_disc = '".$_SESSION['professor']['sigla_disc']."'";
    $atividades = mysqli_query($conn, $sql);
    $aux = 0;
    $mural = [];
    if($atividades->num_rows > 0){
        while($v = $atividades->fetch_assoc()){
            $mural[$aux] = $v;
            $aux++; 
        }
    }
?>
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
            <form id="criar" enctype = "multipart/form-data" form action="./_mural.php" method="POST">
                <p>Adicionar material complementar:</p>
                <input class="input d-none" name="sigla_turma" value="<?=$turma?>">
                <input class="input d-none" name="sigla_disc" value="<?=$_SESSION['professor']['sigla_disc']?>">
                Titulo: <br>
                <input class="input" name="titulo" required> <br>
                Resumo: <br>
                <input class="input" name="informacao" required>
                Material: <br>
                <input class="input" name="arquivo" type="file"> <br>
                <br>
                <button class="btn" type="submit">Adicionar material</button>
            </form>
            <p>Ou exclua um material existente aqui!</p>
            <?php foreach($mural as $m):?>
                <h4>Título: <?=$m['titulo']?></h4><br>
                <h4>Informação: <?=$m['informacao']?></h4><br>
                <a style="color:black" href="../../material/<?=$m['material']?>">Material: <?=$m['material']?></a>
                <form id='criar' enctype = 'multipart/form-data' form action='./_mural.php' method='POST'>
                    <input class='input d-none' name='id' value='<?=$m["id"]?>' required> <br>
                    <input class='input d-none' name='excluir' value='excluir' required> <br>
                    <button class='btn' type='submit'>Excluir</button>
                </form>
            <?php endforeach;?>

            <div style="padding-bottom:50px">

            </div>
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
