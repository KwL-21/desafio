<?php //session_start(); 
 include_once './validar.php';
?>
<?php

    $idusuario =  $_POST["idusuario"];
    $login =  $_POST["login"];
    $senha = md5($_POST["senha"]);
    $perfil =  $_POST["perfil"];
    
    include_once './conexao.php';
    
    $sql = "update usuarios set 
            login = '".$login."', senha = '".$senha."', perfil = '".$perfil."'
            where idusuario = ".$idusuario;
            
    if(mysql_query($sql,$con)){
        echo "Dados atualizados com sucesso!";
        
        
            //Criando Log de Operação "Gravado com Sucesso"
           $log= fopen("Editados.txt", "a+");
            //escreve no arquivo
            fwrite($log, "Editado em: ".date("d/m/Y"). " as ".date("H:i:s"));
            fwrite($log,"\nEditados Por:" .$_SESSION["login"]);
            fwrite($log, "\nID Usuario: ".$idusuario);
            fwrite($log, "\nLogin do Operador: " .$login);
            fwrite($log, "\nPerfil do Operador: ".$perfil);
            fwrite($log, "\n----------------------------\n\n");
            
            //fecha o arquivo
            fclose($log);
        
    }else{
        echo "Erro ao atualizar!";
    }
    mysql_close($con);
?>
<br/>
<a href="painel.php">Painel</a>
