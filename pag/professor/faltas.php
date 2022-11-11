<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
    } 
    include_once '../../conection/conect.php';
    $turma = (isset($_POST['turma']) ? $_POST['turma'] : null);
    //var_dump($nome_atividades);
    $sql = "SELECT * FROM turma_faltas WHERE sigla_turma = '$turma' and sigla_disc = '".$_SESSION['professor']['sigla_disc']."'";
    $sql = mysqli_query($conn, $sql);
    $aux = 0;
    if($sql->num_rows > 0){
        while($v = $sql->fetch_assoc()){
            $faltas[$aux] = [
                'id' => $v['id'],
                'sigla_turma' => $v['sigla_turma'],
                'sigla_disc' => $v['sigla_disc'],
                'mat_aluno' => $v['mat_aluno'],
                'faltas' => $v['faltas']
            ];
            $aux++; 
        }
    }
    $aux = 0;
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>Título</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../../css/geral/css.css">
        <link rel="stylesheet" href="../../css/todos/professor.css">

    </head>
    <body class="min-height-100">
        <?php include_once '../../header_footer/header.php'?>

        <div class="container" style="margin-bottom:50px;">
            <p class="titulo_nf">Atualizando notas e faltas da turma <?=$turma?>:</p>
            <form class="borda" enctype = "multipart/form-data" action="_faltas.php" method="POST">
            
                <?php foreach($faltas as $f):?>
                    <table class="notas_faltas"> 
                        <tr>
                            <input class="d-none" name="id_<?=$aux?>" value="<?=$f['id']?>" required>
                            <input class="d-none" name="sigla_t_<?=$aux?>" value="<?=$f['sigla_turma']?>" required>
                            <input class="d-none" name="sigla_d_<?=$aux?>" value="<?=$f['sigla_disc']?>" required>
                            <input class="d-none" name="mat_a_<?=$aux?>" value="<?=$f['mat_aluno']?>" required>
                            <th>Matricula:<?=$f['mat_aluno']?></th>
                            <th>Faltas:<input class="t-center" name="falta_<?=$aux?>" value="<?=$f['faltas']?>" required></th>
                        </tr>
                    </table>
                    <?php $aux++;?>
                <?php endforeach;?>
                <button style="margin-top:20px" class="btn" type="submit">Salvar</button>
            </form>

        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
