<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>

        <script>

            function excluir(mat) {

                if (confirm('Deseja realmente excluir ?')) {
                    location.href = 'excluir.php?mat=' + mat;
                }

            }

        </script>


    </head>
    <body>

        <h3>Consulta de Alunos</h3>

        <form action="consultar.php" method="get">

            Nome:
            <input type="text" name="nome"/>
            <input type="submit" value="Buscar" />

        </form>

        <hr/>

        <?php
        include_once './funcoes.php';
        //testando se alguem pesquisou algo
        if (!empty($_GET["nome"])) {
            $nome = $_GET["nome"];

            include_once './conexao.php';

            $sql = "select * from alunos where nome like '" . $nome . "%'";

            $result = mysql_query($sql, $con);
            $totalregistros = mysql_num_rows($result); //num de linhas

            if ($totalregistros > 0) {
                //echo "OK";
                ?>
                <table width="900px" border="1px">  
                    <tr>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Dt Nasc</th>
                        <th>Editar</th>
                        <th>Excluir</th>
                    </tr>                                                
                    <?php
                    while ($row = mysql_fetch_array($result)) {
                        ?>
                        F
                        <tr>
                            <td><?php echo $row["nome"] ?></td>
                            <td><?php echo $row["email"] ?></td>
                            <td><?php echo databusca($row["dtnasc"]) ?></td>
                            <td><a href="editar.php?mat=<?php echo $row["mat"] ?>">...</a></td>
                            <td><a href="#" onclick="excluir(<?php echo $row["mat"] ?>)">X</a></td>
                        </tr>

                        <?php
                    }
                    //echo "</table>";
                    ?>
                </table>
                <?php
                echo "Total de registros: " . $totalregistros;
            } else {
                echo "Nenhum aluno encontrado!";
            }

            mysql_close($con);
        }
        ?>
        <hr/>
        <a href="index.php">Pagina Inicial</a>
    </body>
</html>
