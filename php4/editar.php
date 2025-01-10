<?php //session_start(); 
 include_once './validar.php';

if($_SESSION["perfil"] == "user"){
 header("Location:sem_acesso.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $idusuario = $_GET["idusuario"];
            include_once './conexao.php';
            
            $sql = "select * from usuarios where idusuario = ". $idusuario;            
            $result = mysql_query($sql,$con);            
            $row = mysql_fetch_array($result);
                   
                  ?>        
        <h3>Editar Cadastro</h3>

        <form action="atualizar.php" method="post">            
            
            
            <input type="hidden" readonly="true" name="idusuario" value="<?php echo $row["idusuario"] ?>"/>
                   
            Login:<Br/>
            <input type="text" name="login" value="<?php echo $row["login"] ?>"/><br/>

            Senha:<Br/>
            <input type="password" name="senha" value="<?php echo $row["senha"] ?>"/><br/>
            
            Perfil:<br/>
            <input type="radio" name="perfil" value="adm"/>Administrador
            <input type="radio" name="perfil" value="user"/>Usuário
            <br/>
            
           
            <input type="submit" value="Enviar" />
            
        </form>        
        
    </body>
</html>
