<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
    } 
    include_once '../../conection/conect.php';
    $turma = (isset($_POST['turma']) ? $_POST['turma'] : null);

    //Informações de notas
    $sql = "SELECT * FROM turma_notas WHERE sigla_turma = '$turma' and sigla_disc = '".$_SESSION['professor']['sigla_disc']."' ORDER BY id_atividade";
    $sql = mysqli_query($conn, $sql);
    $aux = 0;
    if($sql->num_rows > 0){
        while($v = $sql->fetch_assoc()){
            $infos_atividades[$aux] = [
                'id' => $v['id'],
                'sigla_turma' => $v['sigla_turma'],
                'sigla_disc' => $v['sigla_disc'],
                'id_atividade' => $v['id_atividade'],
                'mat_aluno' => $v['mat_aluno'],
                'valor_atividade' => $v['valor_atividade'],
                'valor_atingido' => $v['valor_atingido']
            ];
            $aux = $aux + 1; 
        }
    }
    //total de alunos
    $sql= "SELECT count(matricula) FROM aluno where  turma = '$turma'";
    $sql = mysqli_query($conn, $sql);
    $total_alunos = $sql->fetch_assoc();
    $total_alunos = $total_alunos["count(matricula)"];


    //total de atividades
    $sql = "SELECT count(distinct id) as atividades FROM atividades_avaliativas where sigla_disc = '".$_SESSION['professor']['sigla_disc']."' and sigla_turma = '$turma'";
    $sql = mysqli_query($conn, $sql);
    $total_atividades = $sql->fetch_assoc();
    $total_atividades = $total_atividades["atividades"];

    //nome atividades
    $sql = "SELECT id, titulo FROM atividades_avaliativas where sigla_disc = '".$_SESSION['professor']['sigla_disc']."' and sigla_turma = '$turma'";
    $sql = mysqli_query($conn, $sql);
    $nome_atividades = [];
    $aux = 0;
    if($sql->num_rows > 0){
        while($v = $sql->fetch_assoc()){
            $nome_atividades[$aux] = [
                'id' => $v['id'],
                'titulo' => $v['titulo']
            ];
            $aux++;
        }
    }


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
            $aux = $aux + 1; 
        }
    }
    //var_dump($faltas);

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
    <body style="min-height: 100vh;">
        <?php include_once '../../header_footer/header.php'?>

        <div class="container" style="margin-bottom:50px;">
            <p class="titulo_nf">Atualizando notas e faltas da turma <?=$turma?>:</p>
            <form class="borda" enctype = "multipart/form-data" action="_notas.php" method="POST">
            
                <?php foreach($nome_atividades as $nome_at):?>
                    <h4>Atividade:<?=$nome_at['titulo']?></h4>
                    <?php foreach($infos_atividades as $infos_at):?>
                        <?php if($nome_at['id'] == $infos_at['id_atividade']):?>
                            <table class="notas_faltas"> 
                                <tr>
                                    <input class="d-none" name="id_<?=$aux?>" value="<?=$infos_at['id']?>" required>
                                    <input class="d-none" name="sigla_t_<?=$aux?>" value="<?=$infos_at['sigla_turma']?>" required>
                                    <input class="d-none" name="sigla_d_<?=$aux?>" value="<?=$infos_at['sigla_disc']?>" required>
                                    <input class="d-none" name="id_at_<?=$aux?>" value="<?=$infos_at['id_atividade']?>" required>
                                    <input class="d-none" name="mat_a_<?=$aux?>" value="<?=$infos_at['mat_aluno']?>" required>
                                    <input class="d-none" name="valor_<?=$aux?>" value="<?=$infos_at['valor_atividade']?>" required>
                                    <th>Matricula:<?=$infos_at['mat_aluno']?></th>
                                    <th>Valor:<?=$infos_at['valor_atividade']?></th>
                                    <th>Nota:<input class="t-center" name="nota_<?=$aux?>" value="<?=$infos_at['valor_atingido']?>" required></th>
                                </tr>
                            </table>
                            <?php $aux++;?>
                        <?php endif;?>
                    <?php endforeach;?>
                    <hr style="margin: 20px 0">
                <?php endforeach;?>
                <button style="margin-top:20px" class="btn" type="submit">Salvar</button>
            </form>

        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
