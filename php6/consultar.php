<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <script src="js/dojo/dojo.js"></script>
        <script src="js/dojo/utils.js"></script>
        
    </head>
    <body>
        
        <h3>Consulta de Funcionários</h3>
        
        <!--NÃO SERÁ O FORMULÁRIO QUE ENVIARÁ OS DADOS-->
        Nome:
                      <!--va para dados.php levando o valor digitado neste campo-->
        <input type="text" onkeyup="ajax('dados.php?nome='+this.value,'resposta')"/>
        <hr/>
        
        <div id="resposta">
            <!--local do retorno-->
        </div>
        
        <?php
        // put your code here
        ?>
    </body>
</html>
