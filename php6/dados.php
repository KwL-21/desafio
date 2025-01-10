<?php
    //eliminando o cache
    header("cache-control:no-cache");
    
    if(!empty($_GET["nome"])){    
        
        $nome = $_GET["nome"];    
        
        include_once './conexao.php';
        
        $sql = "select * from funcionario inner join cargo
                on funcionario.idcargo = cargo.idcargo
                where nome like '".$nome."%'";
    
        $result = mysql_query($sql,$con);
        
        if(mysql_num_rows($result) > 0){
            ?>
            <table width='900px' border='1px'>
                <tr>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Cpf</th>
                    <th>Dt Nasc</th>
                    <th>Cargo</th>
                    <th>Salario</th>
                </tr>
            <?php
            while($row = mysql_fetch_array($result)){
                
                $data = explode("-", $row["dtnasc"]);
                $data = array_reverse($data);
                $dtnasc = implode("/", $data);                
                //round(numero); arredonda um valor
                $salario = "R$".number_format($row["salario"],2,',','.');                
                ?>
                <tr>
                    <td><?php echo $row["nome"] ?></td>
                    <td><?php echo $row["email"] ?></td>
                    <td><?php echo $row["cpf"] ?></td>
                    <td><?php echo $dtnasc ?></td>
                    <td><?php echo $row["nomecargo"] ?></td>
                    <td><?php echo $salario ?></td>
                </tr>
                <?php
            }
            echo "</table>";
        }else{
            echo "Nenhum funcionário encontrado!";
        }    
        mysql_close($con);
    }

?>
