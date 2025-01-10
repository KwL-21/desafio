<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            echo "<h3>Olá Mundo!</h3>";
                               
            //DECLARAÇÃO DE VARIÁVEIS
            //Estudem TIPOS de variáveis do PHP
            
            $nome = "roberto justus"; //String
            $idade = 40; //int
            $salario = 10000; //real,double,float
                                                            
            $nome = mb_strtolower($nome,'utf8');
            $nome = ucwords($nome);
            
            //(.) serve para concatenar/juntar texto com variavel
            echo "Nome: ".$nome;
            echo "<br/>Idade: ".$idade;
            echo "<br/>Salário: R$".number_format($salario,2,",",".");
        
        ?>
        
        <br/><br/>
        
        <a href="form1.php">Formulário 1</a>
        <a href="form2.php">Formulário 2</a>
        
    </body>
</html>
