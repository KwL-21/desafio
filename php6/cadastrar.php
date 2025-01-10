<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <noscript>
        <!--no caso do JS tiver desativado, será redirecionado-->
        <meta http-equiv="refresh" content="0; url=noscript.php"/>
        </noscript>
        
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.validate.js"></script>
        <script src="js/maskedinput-1.1.2.pack.js"></script>
        
        <script>        
        //só vai rodar o script quando o documento estiver pronto
        $(document).ready(function(){
            $("#f").validate(); //aplica a function validate ao #f
            $("#cpf").mask("999.999.999-99");
            $("#dtnasc").mask("99/99/9999");
        }//chave
    ); //parentese
        
        </script>
        
        
        
        
        <style>
            label.error{
                color: red;
                font-size: 12px;
                margin-left: 5px;
            }
        </style>
        
    </head>
    <body>
        
        <h3>Cadastro de Funcionário</h3>
        
        <form action="gravar.php" method="post" id="f">
            
            Nome:<br/>
            <input type="text" name="nome" class="required" minlength="3"/><br/>
            
            E-mail:<br/>
            <input type="text" name="email" class="required email"/><br/>
            
            Cpf:<br/>
            <input type="text" name="cpf" class="required" id="cpf"/><br/>
            
            Data de Nascimento:<br/>
            <input type="text" name="dtnasc" class="required" id="dtnasc"/><br/>
            
            Cargo:<br/>
            <select name="cargo" class="required">
                <option value=""/>Escolha
                
                <?php
                    include_once './conexao.php';
                    $sql = "select * from cargo";
                    $result = mysqli_query($con, $sql);
                    
                    while($row = mysqli_fetch_array($result)){
                        echo "<option value='".$row["idcargo"]."'/>".$row["nomecargo"];
                    }
                  //  mysqli_close($con);
                ?>
                
                
            </select>
            
            <br/>
            <input type="submit" value="Enviar"/>
            
        </form>
                
        <?php
        // put your code here
        ?>
    </body>
</html>
