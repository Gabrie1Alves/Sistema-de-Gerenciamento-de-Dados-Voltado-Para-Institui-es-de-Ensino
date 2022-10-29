<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost:8080/TCC_II");
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
    }else if ($pag === 'notas_faltas'){
        $url = $url.'notas-faltas.php';
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
        <title>Título</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../../css/geral/css.css">
        <link rel="stylesheet" href="../../css/todos/turma.css">
    </head>
    <body>
        <?php include_once '../../header_footer/header.php'?>
        <div class="container">
            <form enctype = "multipart/form-data" form action="<?= $url?>" method="POST">
                <div class="formTurma">
                    <p>Selecione a turma que deseja trabalhar:</p>
                    <select class="select" name="turma" id="turma">
                        <?php
                            for($i = 0; $i < count($turma); $i++){
                                echo "<option value=".$turma[$i].">".$turma[$i]."</option>";
                            }
                        ?>
                    </select>
                    <br>
                    <button class="btn" type="submit">Entrar</button>
                </div>
            </form>
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
