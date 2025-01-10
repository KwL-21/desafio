<?php
    
    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);
    $perfil = $_POST["perfil"];

    include_once './conexao.php';
    
    $sql = "insert into usuarios values(null,
            '".$login."','".$senha."','".$perfil."')";
    
    //echo $sql;    
    if(mysql_query($sql,$con)){
        echo "Gravado com sucesso!";
    }else{
        echo "Erro ao gravar!";
    }
    
    mysql_close($con);
?>
<a href="painel.php">Painel de Controle</a>
