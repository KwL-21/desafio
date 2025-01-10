<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $telefone = $_POST["telefone"];
        
        //GRAVAÇÃO EM BANCO
        
        //PASSO 1- CONECTAR AO BANCO        
        //conectando o gravar.php ao mysql
                            //endereco,  user, senha
        $con = mysqli_connect("localhost","root","");
        
        //PASSO 2 - SELECIONAR A BASE
        //seleciona a base a ser trabalhada
        mysqli_select_db($con, 'aula2');
        
        //PASSO 3 -> MONTAR A INSTRUÇÃO SQL DE INSERÇÃO
        //insert into clientes values(null,'Max','maxc.guedes@gmail.com','2233-4455');
        
        $sqli = "insert into clientes values(null,'".$nome."','".$email."','".$telefone."')";
        
        if(mysqli_query($con,$sqli)){
            echo "Gravado com sucesso!";
        }else{
            echo "Erro ao gravar!";
        }
        
        mysqli_close($con);
        
        ?>
        <br/>
        <a href="index.php">Página Inicial</a>
    </body>
</html>
