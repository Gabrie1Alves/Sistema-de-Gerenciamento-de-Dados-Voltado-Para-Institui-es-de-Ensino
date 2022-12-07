<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
    } 
    include_once '../../conection/conect.php';

    $sql = "SELECT * FROM turma_disciplinas where sigla_turma = '" .$_SESSION["aluno"]["turma"]. "'";
    $sql = mysqli_query($conn, $sql);
    $info = $sql->fetch_assoc();

    $disciplinas = [];
    for($k = 1; $k<8; $k++){
        if(!empty($info['disciplina_sigla'.$k])){
            $sql = "SELECT disciplica, sigla_disc FROM professor where sigla_disc = '".$info['disciplina_sigla'.$k]."'";
            $sql = mysqli_query($conn, $sql);
            $sql = $sql->fetch_assoc();
            $disciplinas[$k] = [
                'sigla' => $sql['sigla_disc'],
                'disc' => $sql['disciplica']
            ];
        }
    }
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>Horário</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../../css/geral/css.css">
        <link rel="stylesheet" href="../../css/todos/aluno.css">
    </head>
    <body class="min-height-100">
        <?php include_once '../../header_footer/header.php'?>

        <div class="container">
            <p class="title_form t-center m-t50">Horario</p>
            <div class="disciplinas">
                <?php foreach($disciplinas as $d):?>
                    <p class="disciplinas-siglas"><?=$d['sigla']?> - <?=$d['disc']?></p>
                <?php endforeach;?>
            </div>
            <table class="borda"> 
                <tr class="tabela-topo">
                    <th>Disciplina</th>
                    <th>Dia</th>
                    <th>Hora</th>
                    <th>Dia</th>
                    <th>Hora</th>
                </tr>
                <?php for($j = 1; $j<8; $j++):?>
                    <?php if(!empty($info['disciplina_sigla'.$j])):?>
                        <tr>
                            <th><?=$info['disciplina_sigla'.$j]?></th>
                            <th><?=$info['dia_d'.$j.'_1']?></th>
                            <th><?=$info['h_d'.$j.'_1']?></th>
                            <th><?=$info['dia_d'.$j.'_2']?></th>
                            <th><?=$info['h_d'.$j.'_2']?></th>
                        </tr>
                    <?php endif;?>
                <?php endfor;?>
                
            </table>
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
