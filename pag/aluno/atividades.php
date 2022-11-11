<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
    }  


    include_once '../../conection/conect.php';
    $sql = "SELECT * FROM atividades_avaliativas WHERE sigla_turma = '".$_SESSION['aluno']['turma']."' 
            AND data > CURDATE() ORDER BY data";
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
        <link rel="stylesheet" href="../../css/todos/aluno.css">
    </head>
    <body  class="min-height-100">
        <?php include_once '../../header_footer/header.php'?>

        <div class="container">
            <p class="title_form t-center m-t50">Mural de atividades</p>
            <table class="borda"> 
                <tr class="tabela-topo">
                    <th>Disciplina</th>
                    <th>Data</th>
                    <th>Horário</th>
                    <th>Título</th>
                    <th>Resumo</th>
                    <th>Valor</th>
                </tr>
                <?php foreach($mural as $m):?>
                    <tr>
                        <th><?=$m['sigla_disc']?></th>
                        <th><?=$m['data']?></th>
                        <th><?=$m['horario']?></th>
                        <th><?=$m['titulo']?></th>
                        <th><?=$m['resumo']?></th>
                        <th><?=$m['valor']?></th>
                        
                    </tr>
                <?php endforeach;?>
            
            </table>
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
