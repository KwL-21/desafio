<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <h3>Envio de dados pelo GET</h3>
        
        <form action="recebe2.php" method="get">
            
            Nome:<br/>
            <input type="text" name="nome"/><br/>
            
            Sexo:<br/>
            <input type="radio" name="sexo" value="Masculino"/>M
            <input type="radio" name="sexo" value="Feminino"/>F
            <br/>
            
            <input type="submit" value="Enviar" />
        </form>
               
        <?php 
            //echo $_SERVER["REMOTE_ADDR"];
        ?>
    </body>
</html>
