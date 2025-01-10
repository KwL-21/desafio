<?php //session_start(); 
 include_once './validar.php';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php

        echo "Você não tem acesso ".$_SESSION["login"];
         ?>
        <br><p>
        <img src="img/meme.png">
        <br><p>
        <a href="painel.php">Voltar para o Painel</a>    
    </body>
</html>
