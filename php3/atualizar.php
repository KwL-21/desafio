<?php

    include_once './funcoes.php';

    $mat =  $_POST["mat"];
    $nome =  $_POST["nome"];
    $email =  $_POST["email"];
    $dtnasc = databanco($_POST["dtnasc"]); //dd/mm/aaaa
    
    //echo $dtnasc;
    
    include_once './conexao.php';
    
    $sql = "update alunos set 
            nome = '".$nome."', email = '".$email."', dtnasc = '".$dtnasc."'
            where mat = ".$mat;
    
    
    if(mysql_query($sql,$con)){
        echo "Dados atualizados com sucesso!";
    }else{
        echo "Erro ao atualizar!";
    }
    mysql_close($con);
?>
<br/>
<a href="index.php">Página Inicial</a>
