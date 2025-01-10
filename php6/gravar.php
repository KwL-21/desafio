<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $cpf = $_POST["cpf"];
    $dtnasc = $_POST["dtnasc"]; // dd/mm/aaaa --> aaaa-mm-dd
    $cargo = $_POST["cargo"]; //int

    
    //Tratamento de data
    $data = explode("/", $dtnasc); //[dd][mm][aaaa]
    $data = array_reverse($data); //[aaaa][mm][dd]
    $dtnasc = implode("-", $data);
    
    //echo $dtnasc;
    
    include_once './conexao.php';
    
    //CONSULTA AO BANCO, PARA VERIFICAR A EXISTENCIA DO FUNCIONARIO
    $sqlcpf = "select * from funcionario where cpf = '".$cpf."'";
    $result = mysql_query($sqlcpf,$con);
    
    if(mysql_num_rows($result) == 1){
        echo "Funcionario ja cadastrado!";
    }else{
    
    $sql = "insert into funcionario values(null,
            '".$nome."','".$email."','".$cpf."','".$dtnasc."',".$cargo.")";
    
    if(mysql_query($sql,$con)){
        echo "Gravado com sucesso!";
    }else{
        echo "Erro ao gravar!";
    }
    
    }
    mysql_close($con); 
    
?>
<br/>
<a href="index.php">Página Inicial</a>
