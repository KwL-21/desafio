<?php
include_once './funcoes.php';

$nome = $_POST["nome"];
$email = $_POST["email"];
$dtnasc = databanco($_POST["dtnasc"]); //dd/mm/aaaa
//echo $dtnasc;

include_once './conexao.php';


$sql = "insert into alunos values(null,
            '".$nome."','".$email."','".$dtnasc."')";

if (mysql_query($sql, $con)) {
    echo "Gravado com sucesso!";
} else {
    echo "Erro ao gravar!";
}
mysql_close($con);
?>
<br/>
<a href="index.php">Página Inicial</a>
