<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
    }  
    include_once '../../conection/conect.php';

    $sql = "SELECT * FROM turma_notas WHERE mat_aluno = '".$_SESSION['usuario']['matricula']."' and sigla_turma = '".$_SESSION['aluno']['turma']."' ORDER BY sigla_disc";
    $sql = mysqli_query($conn, $sql);
    $aux = 0;
    if($sql->num_rows > 0){
        while($v = $sql->fetch_assoc()){
            $infos[$aux] = [
                'id' => $v['id'],
                'sigla_turma' => $v['sigla_turma'],
                'sigla_disc' => $v['sigla_disc'],
                'id_atividade' => $v['id_atividade'],
                'mat_aluno' => $v['mat_aluno'],
                'valor_atividade' => $v['valor_atividade'],
                'valor_atingido' => $v['valor_atingido']
            ];
            $sql1 = "SELECT titulo FROM atividades_avaliativas WHERE id = '".$infos[$aux]['id_atividade']."'";
            $sql1 = mysqli_query($conn, $sql1);
            $sql1 = $sql1->fetch_assoc();
            $infos[$aux]['titulo'] = $sql1['titulo'];

            $aux = $aux + 1; 
        }
    }
    $aux = $infos[0]['sigla_disc'];

    $sql = "SELECT * FROM turma_faltas WHERE mat_aluno = '".$_SESSION['usuario']['matricula']."' and sigla_turma = '".$_SESSION['aluno']['turma']."' ORDER BY sigla_disc";
    $sql = mysqli_query($conn, $sql);
    $aux1 = 0;
    if($sql->num_rows > 0){
        while($v = $sql->fetch_assoc()){
            $falta[$aux1] = [
                'sigla_disc' => $v['sigla_disc'],
                'faltas' => $v['faltas']
            ];

            $aux1++; 
        }
    }
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>Título</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../../css/geral/css.css">
        <link rel="stylesheet" href="../../css/todos/aluno.css">
    </head>
    <body class="min-height-100">
        <?php include_once '../../header_footer/header.php'?>

        <div class="container">
            <p class="title_form t-center m-t50">Notas</p>
            <div class="borda m-t50">
                <h3 class="subTitle_form t-center">Disicplina: <?=$infos[0]['sigla_disc']?></h3>
                <?php foreach($infos as $i):?>
                    <?php if($i['sigla_disc'] != $aux):?>
                        <h3 class="subTitle_form t-center">Disicplina: <?=$i['sigla_disc']?></h3>
                        <?php $aux = $i['sigla_disc']?>
                    <?php endif;?>
                    <table class="notas_faltas"> 
                        <tr>
                            <th>Atividade: <?=$i['titulo']?></th>
                            <th>Valor: <?=$i['valor_atividade']?></th>
                            <th>Nota: <?=$i['valor_atingido']?></th>
                        </tr>
                    </table>
                <?php endforeach;?>
            </div>
            


            <p class="title_form t-center m-t50">Faltas</p>
            <div class="borda m-t50">
                <?php foreach($falta as $f):?>
                    <table class="notas_faltas"> 
                        <tr>
                            <th>Disciplina:<?=$f['sigla_disc']?></th>
                            <th>Faltas:<?=$f['faltas']?></th>
                        </tr>
                    </table>
                <?php endforeach;?>
            </div>
            

        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
