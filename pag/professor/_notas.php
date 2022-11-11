<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
    }
    $erro = 0;

    include_once '../../conection/conect.php';


    $infos = [];
    $delete = [];
    $del = "";
    $aux = 0;
    while(true){
        if(empty($_POST['id_'.$aux])){
            break;
        }
        $infos[$aux] = [
            0 => $_POST['id_'.$aux],
            1 => $_POST['sigla_t_'.$aux],
            2 => $_POST['sigla_d_'.$aux],
            3 => $_POST['id_at_'.$aux],
            4 => $_POST['mat_a_'.$aux],
            5 => $_POST['valor_'.$aux],
            6 => $_POST['nota_'.$aux]
        ];
        array_push($delete, $_POST['id_'.$aux]);
        $aux++;
    }
    $aux = 1;
    foreach($delete as $d){
        if($aux == count($delete)){
            $del = $del."'".$d."'";
        }else{
            $del = $del."'".$d."',";
        }
        $aux++;
    }
    $aux = 0;

    foreach($infos as $i){
        $sql = "INSERT INTO turma_notas(sigla_turma, sigla_disc, id_atividade, mat_aluno, valor_atividade, valor_atingido) 
        VALUES ('$i[1]', '$i[2]', '$i[3]', '$i[4]', '$i[5]', '$i[6]');";
        if(!mysqli_query($conn, $sql)){
            $erro++;
        }
    }
    $sql = "DELETE FROM turma_notas where id in ($del)";
    if(!mysqli_query($conn, $sql)){
        $erro++;
    }

    if($erro > 0){
        echo "<script> window.location = '../home/professor.php?e=2'</script>";
    }else{
        echo "<script> window.location = '../home/professor.php?e=0'</script>";
    }

?>