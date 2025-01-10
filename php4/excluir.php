<?php //session_start(); 
 include_once './validar.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
    
<?php
 include_once './validar.php';
?>

<?php

    $idusuario = $_GET["idusuario"];
   
    include_once './conexao.php';
    
    $sql = "delete from usuarios where idusuario = ".$idusuario;
    
    if(mysql_query($sql,$con)){
        echo "Deletado com sucesso Srº (ª) ".$_SESSION ["login"];
        
            //Criando Log de Operação "Gravado com Sucesso"
           $log= fopen("deletados.txt", "a+");
            //escreve no arquivo
            fwrite($log, "Excluido em: ".date("d/m/Y"). " as ".date("H:i:s"));
            fwrite($log,"\nDeletado Por:" .$_SESSION["login"]);
            fwrite($log, "\nId Usuario: ".$idusuario);
            fwrite($log, "\nLogin: ".$sql);
            fwrite($log, "\n----------------------------\n\n");
            
            //fecha o arquivo
            fclose($log);
        
        
        
        }else{
        echo "Erro ao deletar!";
    }
    mysql_close($con);

    ?>
<br/>
<a href="painel.php">Voltar para o Painel</a>

    
</body>
</html>