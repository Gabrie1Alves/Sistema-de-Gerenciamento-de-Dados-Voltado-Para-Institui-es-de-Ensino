<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
    }

    include_once '../../conection/conect.php';


    $infos = [];
    $aux = 0;
    while(true){
        if(empty($_POST['id_'.$aux])){
            break;
        }
        $infos[$aux] = [
            0 => $_POST['id_'.$aux],
            1 => $_POST['sigla_t_'.$aux],
            2 => $_POST['sigla_d_'.$aux],
            3 => $_POST['mat_a_'.$aux],
            4 => $_POST['falta_'.$aux]
        ];
        $aux++;
    }
    foreach($infos as $i){
        $sql = "UPDATE turma_faltas SET faltas = '$i[4]' WHERE id = '$i[0]'";
        if(!mysqli_query($conn, $sql)){
            echo "ERRO NO UPDATE!";
        }
    }
?>