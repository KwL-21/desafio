<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include_once './funcoes.php';
        $mat = $_GET["mat"];
        include_once './conexao.php';

        $sql = "select * from alunos where mat = " . $mat;
        $result = mysql_query($sql, $con);
        $row = mysql_fetch_array($result);
        ?>        
        <h3>Cadastro de Aluno</h3>

        <form action="atualizar.php" method="post">            


            <input type="hidden" readonly="true" name="mat" value="<?php echo $row["mat"] ?>"/>

            Nome:<Br/>
            <input type="text" name="nome" value="<?php echo $row["nome"] ?>"/><br/>

            E-mail:<Br/>
            <input type="text" name="email" value="<?php echo $row["email"] ?>"/><br/>

            Dt. Nascimento:<Br/>
            <input type="text" name="dtnasc"  value="<?php echo databusca($row["dtnasc"]) ?>"/><br/>

            <input type="submit" value="Enviar" />

        </form>        

    </body>
</html>
