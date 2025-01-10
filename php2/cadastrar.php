<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <script>
            
            function validar(){
                
                var msg = "";
                var flag = 0;
                
                if(fcadastro.nome.value==""){
                    flag = 1;
                    msg = "Preencha o campo nome!";
                }                
                
                if(fcadastro.email.value==""){
                    flag = 1;
                    msg = msg + "<br/>Preencha o campo email!";
                }                
                
                if(fcadastro.telefone.value==""){
                    flag = 1;
                    msg = msg + "<br/>Preencha o campo telefone!";
                }    
                
                if(flag == 0){
                    return true;
                }else{
                    //imprimir o conteudo da msg na pagina
                    document.getElementById('resposta').innerHTML = msg;
                    return false;
                }
                
            }
            
        </script>
        
    </head>
    <body>
        
        <h3>Cadastro de Clientes</h3>
        
        <form action="gravar.php" method="post" name="fcadastro" onsubmit="return valida()">
            
            Nome:<br/>
            <input type="text" name="nome"/><br/>
            
            E-mail:<br/>
            <input type="text" name="email"/><br/>
            
            Telefone:<br/>
            <input type="text" name="telefone"/><br/>
            
            <input type="submit" value="Enviar" />
            
        </form>
        
        <div id="resposta">            
        </div>

        <?php
        // put your code here
        ?>
    </body>
</html>
