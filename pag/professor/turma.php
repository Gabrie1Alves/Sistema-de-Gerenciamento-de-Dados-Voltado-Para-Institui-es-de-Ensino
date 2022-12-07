<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
    }  
    include_once '../../conection/conect.php';
    $turmas = "SELECT sigla from turma";
    $turmas = mysqli_query($conn, $turmas);
    $aux = 0;
    if($turmas->num_rows > 0){
        while($v = $turmas->fetch_assoc()){
            $turma[$aux] = $v['sigla'];
            $aux = $aux + 1; 
        }
    }
?>
<!-- atividades, notas_faltas, mural, complemento -->
<?php
    $pag = isset($_GET['select']) ? $_GET['select'] : null;
    $url = '../professor/';
    if ($pag === 'atividades'){
        $url = $url.'atividade-avaliativa.php';
    }else if ($pag === 'notas'){
        $url = $url.'notas.php';
    }else if ($pag === 'faltas'){
        $url = $url.'faltas.php';
    }else if ($pag === 'mural'){
        $url = $url.'mural.php';
    }else if ($pag === 'complemento'){
        $url = $url.'complemento.php';
    }else{
        $url = '../turma/turma.php';
    }
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>Turma</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../../css/geral/css.css">
        <link rel="stylesheet" href="../../css/todos/turma.css">
        <link rel="stylesheet" href="../../css/todos/professor.css">
    </head>
    <body class="min-height-100">
        <?php include_once '../../header_footer/header.php'?>
        <div class="container">
            <form class="borda" enctype = "multipart/form-data" form action="<?= $url?>" method="POST">

                <p>Selecione a turma que deseja trabalhar:</p>
                <select class="w-100" name="turma" id="turma"
                style="margin-top:10px; margin-bottom:20px">
                    <?php
                        for($i = 0; $i < count($turma); $i++){
                            echo "<option value=".$turma[$i].">".$turma[$i]."</option>";
                        }
                    ?>
                </select>
                <br>
                <button class="btn" type="submit">Entrar</button>

            </form>
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
