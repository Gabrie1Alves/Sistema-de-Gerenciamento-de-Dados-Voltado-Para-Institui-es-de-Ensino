<?php
//Fazer as verificações como: é aluno, professor ou gerenciador?
//confirmar a senha
//autenticação
//enviar para as próximas paginas os dados do user

/*
Enviar os dados de ID + Login para as próximas paginas para 
ter certeza que está logado.
*/


//envia para a próxima página
//se for gerenciador por exemplo, envia para essa:
// echo "<script> window.location = '../gerenciador/home.php'</script>"
// echo "<script> window.location = '../aluno/home.php'</script>"
echo "<script> window.location = './home/aluno.php'</script>"
?>