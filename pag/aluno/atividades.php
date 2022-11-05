<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
    }  

    include_once '../../conection/conect.php';
    $sql = "SELECT * FROM turma_material WHERE sigla_turma = '".$_SESSION['aluno']['turma']."' ORDER BY sigla_disc";
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
    <body>
        <?php include_once '../../header_footer/header.php'?>

        <div class="container">
            <p class="title">Mural de atividades</p>
            <table> 
                <tr class="tabela-topo">
                    <th>Disciplina</th>
                    <th>Titulo</th>
                    <th>Informação</th>
                    <th>Material</th>
                </tr>
                <?php foreach($mural as $m):?>
                    <tr>
                        <th><?=$m['sigla_disc']?></th>
                        <th><?=$m['titulo']?></th>
                        <th><?=$m['informacao']?></th>
                        <th><a style="color:black" href="../../material/<?=$m['material']?>"><?=$m['material']?></a></th>
                    </tr>
                <?php endforeach;?>
            
            </table>
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
