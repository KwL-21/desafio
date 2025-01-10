<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
        <h3>Consulta de Clientes</h3>
        
        <form action="consultar.php" method="get">
            
            Nome:
            <input type="text" name="nome" />
            <input type="submit" value="Enviar" />
            
        </form>
        
        <hr/>

        <?php
            //se nao estiver vazio
            //if(!empty($_GET["nome"])){
            
            //isset() se existe
            if(isset($_GET["nome"])){
                
                $nome = $_GET["nome"];
        
            $con = mysqli_connect("localhost","root","");
            mysqli_select_db($con,"aula2");
            
            $sql = "select * from cliente where nome like '".$nome."%' ";
            
            $result = mysqli_query($con,$sql);            
            $totalregistros = mysqli_num_rows($result); //numero de linhas do resultado
        
            if($totalregistros > 0){
                //tem cadastro
                echo "<table width='700px' border='5px'>
                       <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                       </tr>";
                                
                while($row = mysql_fetch_array($result)){
                    echo "<tr>";
                    echo "<td>".$row["nome"]."</td>";
                    echo "<td>".$row["email"]."</td>";
                    echo "<td>".$row["telefone"]."</td>";
                    echo "</tr>";
                }
                
                echo "</table>";
                echo "Total de registros: ".$totalregistros;                               
                
            }else{
                echo "Nenhum cliente cadastrado";
            }
            
            
            }
        ?>
    </body>
</html>
