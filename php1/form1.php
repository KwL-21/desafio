<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <h3>Envio de dados pelo Form</h3>
        
        <form action="recebe1.php" method="POST">
            
            Nome:<br/>
            <input type="text" name="nome"/><br/>
            
            E-mail:<br/>
            <input type="text" name="email"/><br/>
            
            Telefone:<br/>
            <input type="text" name="telefone"/><br/>
            
            <input type="submit" value="enviar"/>
            
        </form>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
