<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $dtnasc = $_POST["dtnasc"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];
    
    
    //EXPRESSAO REGULAR (REGEX)
    // /^ ->inicia a regra
    // $/ -> finaliza a regra
    // [] valores possiveis
    // {} min,max de caracteres
    // + qualquer quantidade
    // \. -> obrigatoriedade do ponto
    $regranome = "/^[a-z A-ZçÇà-üÀ-ÜñÑ]{3,50}$/";
    
    $regraemail = "/^[a-zA-Z0-9.-_]+@[a-zA-Z0-9-]+\.[a-zA-Z.]+$/";
    
    $flag = 0;
    $msg = "";
    
    if(!preg_match($regranome, $nome)){
        $flag = 1;
        $msg = "Preencha o nome corretamente!";
    }
    
    if(!preg_match($regraemail, $email)){
        $flag = 1;
        $msg = $msg. "<br/>Preencha o email corretamente!";
    }
    
    
    if($dtnasc != ""){
        $data = explode("/", $dtnasc); //[dia][mes][ano]

        if(!checkdate($data[1], $data[0], $data[2])){
            $flag = 1;
            $msg = $msg. "<br/>Data inválida!";
        }else{
            $data = array_reverse($data);
            $dtnasc = implode("-", $data);
        }    
    }
    
    //se todas as verificações derem ok
    if($flag == 0){
        include_once './conexao.php';
        
        $sql = "insert into usuario values(null,
                '".$nome."','".$email."','".$dtnasc."','".$login."','".$senha."')";
        
        if(mysql_query($sql,$con)){
            $msg = "Gravado com sucesso!";
        }else{
            $msg = "Erro ao gravar!";
        }
        mysql_close($con);
        
    }
    
    echo $msg;

?>
