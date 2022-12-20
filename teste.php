javascript

<script type="text/javascript">

    function botao(){
        var texto = 'O botao foi clicado!';
        document.getElementById("textBotao").innerHTML = texto;
    }

</script>

<button onclick="botao()">Botao</button>

<p id="textBotao"></p>

jQuery

<script>
    src = "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"
</script>

<script>
    $(document).on('click', '#btn', function(){
        var texto = 'O botao foi clicado';
        $(this).parent().append(texto);
    });
</script>

<button id="btn">Botao</button>

PHP
<?php

    echo "<h1>Olá mundo!</h1>"

?>