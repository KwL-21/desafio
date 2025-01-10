<?php
    session_start();
    //session -> espaço de memória no BROWSER
    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);
    
    //http://php.net/manual/pt_BR/function.mysql-real-escape-string.php
    
    include_once './conexao.php';

   echo $sql = "select * from usuarios where 
            login = '".$login."' AND senha = '".$senha."'";
    
    $result = mysql_query($sql,$con);
    
    if(mysql_num_rows($result) >= 1){
        //echo "logado";
        $row = mysql_fetch_array($result);
        $_SESSION["login"] = $row["login"]; //guardando no navegador(sessao) o valor do login
        $_SESSION["perfil"] = $row["perfil"];
        $_SESSION["tempo"] = time();
        header("location:painel.php");
        
    }else{
        $msg = "Login/Senha invalido(s)";
        header("location:index.php?msg=".$msg);
    }
    
