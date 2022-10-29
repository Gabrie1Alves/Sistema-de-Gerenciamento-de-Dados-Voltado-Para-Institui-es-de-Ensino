<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost:8080/TCC_II");
    }  
    include_once '../../conection/conect.php';
    $turma = (isset($_POST['turma']) ? $_POST['turma'] : null);
    $sql = "SELECT * FROM atividades_avaliativas WHERE sigla_turma = '$turma' and sigla_disc = '".$_SESSION['professor']['sigla_disc']."'";
    $atividades = mysqli_query($conn, $sql);
    $aux = 0;
    $aux1 = 0;
    if($atividades->num_rows > 0){
        while($v = $atividades->fetch_assoc()){
            $atividade[$aux1][$aux] = $v['id'];
            $aux = $aux + 1; 
            $atividade[$aux1][$aux] = $v['sigla_turma'];
            $aux = $aux + 1; 
            $atividade[$aux1][$aux] = $v['sigla_disc'];
            $aux = $aux + 1; 
            $atividade[$aux1][$aux] = $v['data'];
            $aux = $aux + 1; 
            $atividade[$aux1][$aux] = $v['horario'];
            $aux = $aux + 1; 
            $atividade[$aux1][$aux] = $v['titulo'];
            $aux = $aux + 1; 
            $atividade[$aux1][$aux] = $v['resumo'];
            $aux = $aux + 1; 
            $atividade[$aux1][$aux] = $v['valor'];
            $aux = 0; 
            $aux1 = $aux1 + 1;
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
            <!--
            <div class="selecao">
                <button onclick="select_op_professor('criar')" class="select">Criar</button>
                <button onclick="select_op_professor('alterar')" class="select">Alterar</button>
                <button onclick="select_op_professor('excluir')" class="select">Excluir</button>
            </div>-->
            <form id="criar" enctype = "multipart/form-data" form action="./_criar-atividade.php" method="POST">
                <p>Crie uma nova atividade aqui!</p>
                <input class="input d-none" name="turma_sigla" value="<?=$turma?>">
                <input class="input d-none" name="disciplina_sigla" value="<?=$_SESSION['professor']['sigla_disc']?>">
                Data: <br>
                <input class="input" name="data" required placeholder="30/10/22" type="date"> <br>
                Horário: <br>
                <input class="input" name="hora" required  type="time">
                Título: <br>
                <input class="input" name="titulo" required> <br>
                Resumo: <br>
                <input class="input" name="resumo" required> <br>
                Valor: <br>
                <input class="input" name="valor" required> <br>
                <br>
                <button class="btn" type="submit">Criar atividade</button>
            </form>
            <p>Ou exclua uma atividade existente aqui!</p>
            <?php
                for($i = 0; $i < count($atividade); $i++){
                    echo "<form id='criar' enctype = 'multipart/form-data' form action='./_criar-atividade.php' method='POST'>
                            <h5>Data:". $atividade[$i][3] ." </h5>
                            <h5>Horário:". $atividade[$i][4] ."</h5>
                            <h5>Título:". $atividade[$i][5] ."</h5>
                            <h5>Resumo:". $atividade[$i][6] ."</h5>
                            <h5>Valor:". $atividade[$i][7] ."</h5>
                            <input class='input d-none' name='id' value='". $atividade[$i][0] ."' required> <br>
                            <input class='input d-none' name='exluir' value='excluir' required> <br>
                            <button class='btn' type='submit'>Excluir</button>
                        </form>";
                }
            ?>
            <div style="padding-bottom:50px">

            </div>
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
