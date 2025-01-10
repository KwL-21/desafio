<?php
$mat = $_GET["mat"];

include_once './conexao.php';

$sql = "delete from alunos where mat=".$mat;

if (mysql_query($sql, $con)) {
    echo "Deletado com sucesso!";
} else {
    echo "Erro ao deletar!";
}
mysql_close($con);
?>
<br/>
<a href="index.php">Página Inicial</a>