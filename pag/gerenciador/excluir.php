<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost:8080/TCC_II");
    }  

// pega informação que vai alterar: a, p, t
    $alterar = isset($_POST['turma']) ? $_POST['turma'] : null;
    if($alterar != 'a' && $alterar != 'p'){
        header("location: http://localhost/tcc/pag/gerenciador/select-alterar.php");
    }
// pega info como: mat aluno, mat prof, nome turma

    $matricula = isset($_POST['info']) ? $_POST['info'] : null;

    include_once '../../conection/conect.php';
    //1- verificar se cadastro existe
    $sql = "SELECT nome, entrada from usuario where matricula = '$matricula'";
    $nome = mysqli_query($conn, $sql);
    $nome = $nome->fetch_assoc();
    // se o cadastro não existir $existe é setado como falso!
    $existe = true;
    if(empty($nome)){
        $existe = false;
    }
    //2- verificar se pode ser excluido
    //3- trazer informações do cadastro
    if($existe == true){
        if($alterar == 'a'){ //aluno
            $sql = "SELECT rg, nascimento, turma, mae from aluno where matricula = '$matricula'";
            $dados = mysqli_query($conn, $sql);
            $user = $dados->fetch_assoc();
        }else{//professor
            $sql = "SELECT disciplica, sigla_disc, rg, cpf, atuacao, nascimento from professor where matricula = '$matricula'";
            $dados = mysqli_query($conn, $sql);
            $user = $dados->fetch_assoc();
        }
    }
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>Título</title>

        <!-- CSS -->
        <link rel="stylesheet" href="../../css/geral/css.css">
        <link rel="stylesheet" href="../../css/todos/gerenciador.css">

        <!-- JS -->
        <script type="text/javascript" src="../../js_jquery/gerenciador.js"></script>

        <!-- jQuery -->
        <script
            src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
            crossorigin="anonymous">
        </script>
    </head>
    <body>
        <?php include_once '../../header_footer/header.php'?>

        <div class="container">
            <!-- <div class="selecao">
                <button onclick="select_op_professor('aluno')" class="select">Aluno</button>
                <button onclick="select_op_professor('professor')" class="select">Professor</button>
                <button onclick="select_op_professor('disciplina')" class="select">Turma</button>
                <button onclick="select_op_professor('horario')" class="select">Grade</button>
            </div> -->
            <?php if($existe == false):?>
                <?php echo "MATRICULA INEXISTENTE!"?>
            <?php elseif($alterar == 'a'):?>
                <form enctype = "multipart/form-data" action="./_exclusao.php" method="POST">
                    <p>Deseja excluir esse cadastro?</p>
                    <div class="borda">
                        <!-- rg, nascimento, turma, mae, pai-->
                        <p>Informações do aluno:</p>
                        <h4>Nome: <?= $nome['nome']?></h4>
                        <h4>Entrada: <?= $nome['entrada']?></h4>
                        <h4>Matrícula: <?= $matricula?></h4>
                        <h4>RG: <?= $user['rg']?></h4>
                        <h4>Nascimento: <?= $user['nascimento']?></h4>
                        <h4>Turma: <?= $user['turma']?></h4>
                        <h4>Mae: <?= $user['mae']?></h4>   
                        <input class="d-none" type="text" name="matricula" value="<?= $matricula?>">
                        <input class="d-none" type="text" name="tipo" value="aluno">
                        <button class="btn" type="submit">Excluir</button>               
                    </div>
                </form>
                <?php elseif($alterar == 'p'):?>
                    <form enctype = "multipart/form-data" action="./_exclusao.php" method="POST">
                    <p>Deseja excluir esse cadastro?</p>
                    <div class="borda">
                        <!-- disciplica, sigla_disc, rg, cpf, atuacao, nascimento-->
                        <p>Informações do Professor</p>
                        <h4>Nome: <?= $nome['nome']?></h4>
                        <h4>Entrada: <?= $nome['entrada']?></h4>
                        <h4>Matrícula: <?= $matricula?></h4>
                        <h4>Disciplina: <?= $user['disciplica']?></h4>
                        <h4>Sigla da disciplina: <?= $user['sigla_disc']?></h4>
                        <h4>RG: <?= $user['rg']?></h4>
                        <h4>CPF: <?= $user['cpf']?></h4>   
                        <h4>Área de atuação: <?= $user['atuacao']?></h4>
                        <h4>Nascimento: <?= $user['nascimento']?></h4>
                        <input class="d-none" type="text" name="matricula" value="<?= $matricula?>">
                        <input class="d-none" type="text" name="tipo" value="professor">
                        <button class="btn" type="submit">Excluir</button>               
                    </div>
                </form>
                <?php endif;?>
            <!-- <form id="horario" class="d-none" enctype = "multipart/form-data" form action="" method="POST">
                <p>Cadastre uma nova grade aqui</p>
                <div class="borda">
                    <p>Informações da grade</p>
                    <input class="d-none" name="tipo" value="grade" required>

                    Nome: <br>
                    <input class="input" name="nome" placeholder="nome da atividade" required> <br>    
                    
                    Dia da dis: <br>
                    <input class="input" name="atuacao" placeholder="nome da atividade" placeholder="Exatas" required> <br>  
                     

                </div>
            </form> -->

            

        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
