<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        header("location: http://localhost/tcc/");
    }  
    include_once '../../conection/conect.php';
// pega informação que vai alterar: a, p, t

    
    $tipo = $_SESSION['usuario']['tipo'];

    $sql = "SELECT * FROM contato where matricula = '".$_SESSION['usuario']['matricula']."'";
    $contato = mysqli_query($conn, $sql);
    $contato = $contato->fetch_assoc();

    $sql = "SELECT * FROM usuario where matricula = '".$_SESSION['usuario']['matricula']."'";
    $usuario = mysqli_query($conn, $sql);
    $usuario = $usuario->fetch_assoc();

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
    <body class="min-height-100">
        <?php include_once '../../header_footer/header.php'?>

        <div class="container">

            <form id="aluno" enctype = "multipart/form-data" form action="./_config.php" method="POST">
                <p class="title_form">Alterar informações</p>
                <div class="borda">
                    <input class="d-none" name="matricula" value="<?=$contato['matricula']?>" required> <br>

                    <p class="subTitle_form">Contato</p>

                    Telefone: <br>
                    <input class="input" name="tel" value="<?=$contato['telefone']?>" placeholder="ex: 11 1111-1111"> <br>
                    Celular: <br>
                    <input class="input" name="cel1" value="<?=$contato['cel1']?>" placeholder="ex: 11 1 1111-1111" required> <br>
                    Celularl(2): <br>
                    <input class="input" name="cel2" value="<?=$contato['cel2']?>" placeholder="ex: 11 1 1111-1111"> <br>
                    E-mail: <br>
                    <input class="input" name="email" type="email" value="<?=$contato['email']?>" placeholder="ex: exemplo@exemplo.com" required> <br>

                    <p class="subTitle_form">Senha</p>
                    Senha antiga: <br>
                    <input class="input" value="<?=$usuario['senha']?>" disabled> <br>
                    Nova senha: <br>
                    <input class="input" name="senha"> <br>
                    

                    <button class="btn" type="submit">Realizar alterações</button>
                </div>
            </form> 
        </div>

        <?php include_once '../../header_footer/footer.php'?>
    </body>
</html>
