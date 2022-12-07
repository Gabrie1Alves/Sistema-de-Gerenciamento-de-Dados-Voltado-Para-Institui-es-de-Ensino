<?php 
    session_start();
    if(isset($_SESSION)){
        session_destroy();
    }
    $erro = (isset($_GET['e']) ? $_GET['e'] : 0);
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>SAPNET</title>

        <!-- CSS -->
        <link rel="stylesheet" href="./css/geral/css.css">
        <link rel="stylesheet" href="./css/todos/login.css">
    </head>
    <body class="min-height-100">
        <div class="header_total">
            <div class="header">
                <a  href="./default.php"><div class="header_op">Início</div></a>
                <a  href="./pag/topo/contato.php"><div class="header_op">Contato</div></a>
                <a  href="./default.php"><div class="header_op">Configurações</div></a>
                <a  href="./default.php"><div class="header_op">Sair</div></a>
            </div>
        </div>

        <div class="container">
            <div class="login">
                <div class="login_logo">
                    <img src="./img/logosemfundo.png" alt="">
                </div>
                <div class="login_info">
                        <form enctype = "multipart/form-data" form action="./pag/avalia_login.php" method="POST">
                            Código: <br>
                            <input class="login_input" name="cod" required> <br>    
                            Senha: <br>
                            <input class="login_input" name="senha" required type="password">
                            <br>
                            <button class="login_btn" type="submit">Entrar</button>
                        </form>
                    </div>
            </div>
            <?php if($erro == 1):?>
                <div class="error">
                    Código ou senha inválido! <br>
                    Tente novamente.
                </div>
            <?php endif;?>
        </div>

        <?php include_once './header_footer/footer.php'?>
    </body>
</html>
