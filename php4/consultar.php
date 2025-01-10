<?php //session_start(); 
 include_once './validar.php';
?>

<!DOCTYPE html>
<html>
    <head>

       <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
        <script>
            
            function excluir(mat){
                
                if(confirm('Deseja realmente excluir ?')){
                    location.href='excluir.php?idusuario='+mat;
                }
                
            }
            
        </script>
        
        
    </head>
    <body>
        <?php
        echo "Ola ".$_SESSION["login"];
        ?>    
        <h3>Consulta de Registro</h3>
        
        <form action="consultar.php" method="get">
            
            Nome:
            <input type="text" name="login"/>
            <input type="submit" value="Buscar" />
            
        </form>
        
        <hr/>
        
        <?php
        //testando se alguem pesquisou algo
            if(!empty($_GET["login"])){
               $login = $_GET["login"];
               
               include_once './conexao.php';
               
               $sql = "select * from usuarios where login like '".$login."%'";
              // echo $sql;
               $result = mysql_query($sql,$con);
               $totalregistros = mysql_num_rows($result); //num de linhas
               
               if($totalregistros > 0){
                   //echo "OK";
                   ?>
                    <table width="900px" border="1px">  
                        <tr>
                            <th>login</th>
                            <th>Perfil</th>
                            <th>Editar</th>
                            <th>Excluir</th>
                        </tr>                                                
                   <?php
                   
                   while($row = mysql_fetch_array($result)){
                       ?>
                        
                        <tr>
                            <td><?php echo $row["login"]?></td>
                            <td><?php echo $row["perfil"]?></td>
                            <td><a href="editar.php?idusuario=<?php echo $row["idusuario"]?>">...</a></td>
                            <td><a href="#" onclick="excluir(<?php echo $row["idusuario"]?>)">X</a></td>
                        </tr>
                        
                        <?php
                   }                   
                   //echo "</table>";
                   ?>
                   </table>
                   <?php
                   
                   echo "Total de registros: ".$totalregistros;
                   
               }else{
                   echo "Nenhum registro encontrado!";
               }               
               
               mysql_close($con);
               
            }
        ?>
        <hr/>
        <a href="painel.php">Pagina Inicial</a>
    </body>
</html>
