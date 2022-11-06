<?php 
    session_start();
    if(isset($_SESSION)){
        session_destroy();
    }
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
    <head>
        <title>Título</title>

        <!-- CSS -->
        <link rel="stylesheet" href="./css/geral/css.css">
        <link rel="stylesheet" href="./css/todos/login.css">
    </head>
    <body>
        <div class="header_total">
            <div class="header">
                <div class="header_op">logo</div>
                <a href="./pag/topo/contato.php"><div class="header_op">Contato</div></a>
                <div class="header_op">Configurações</div>
                <div class="header_op">Sair</div>
            </div>
        </div>

        <div class="container">
            <div class="login">
                <div class="login_logo">
                    Logo
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

            <div class="error">
                Código ou senha inválido! <br>
                Tente novamente.
            </div>
        </div>

        <?php include_once './header_footer/footer.php'?>
    </body>
</html>
