<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
        <h4>Cadastro de Usuário</h4>
        
        <form action="gravar.php" method="post">
            
            Login:<br/>
            <input type="text" name="login" /><br/>
            
            Senha:<br/>
            <input type="password" name="senha"/><br/>
            
            Perfil:<br/>
            <input type="radio" name="perfil" value="adm"/>Administrador
            <input type="radio" name="perfil" value="user"/>Usuário
            <br/>
            
            <input type="submit" value="Enviar" />
            
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
