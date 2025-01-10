<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        <h3>Cadastro de Aluno</h3>

        <form action="gravar.php" method="post">

            Nome:<Br/>
            <input type="text" name="nome"/><br/>

            E-mail:<Br/>
            <input type="text" name="email"/><br/>

            Dt. Nascimento:<Br/>
            <input type="text" name="dtnasc"/><br/>

            <input type="submit" value="Enviar" />

        </form>

        <?php
        // put your code here
        ?>
    </body>
</html>
