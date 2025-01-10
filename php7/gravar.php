<?php

date_default_timezone_set("America/Sao_Paulo");

$nome = $_POST["nome"];
$email = $_POST["email"];
$dia = $_POST["dia"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$cep = $_POST["cep"];
$estado = $_POST["estado"];
$cidade = $_POST["cidade"];


$dtnasc = $ano . "-" . $mes . "-" . $dia; //yyyy-mm-dd

include_once './conexao.php';

//consultar pelo CPF a existecia do cliente    
$consultacpf = "select * from cliente where cpf = '" . $cpf . "'";
$result = mysql_query($consultacpf);
if (mysql_num_rows($result) == 1) {
    echo "Cliente ja cadastrado!";
} else {


    $sql = "insert into cliente values(null,
            '" . $nome . "','" . $email . "','" . $dtnasc . "','" . $cpf . "')";

    if ($con -> query($sql)) {
        //gravou cliente, tenta gravar endereço
        //retorna o id gerado pela ultima inserção
        $id = mysql_insert_id();

        $sql2 = "insert into endereco values(null,
                '" . $endereco . "','" . $cep . "','" . $estado . "','" . $cidade . "'," . $id . ")";

        if ($con -> query($sql2)) {
            echo "Gravado com sucesso!";
        } else {
            echo "Erro ao gravar endereco!";
            //gravou cliente, mas nao gravou endereco...apaga cliente
            $sql3 = "delete from cliente where idcliente = " . $id;
            %con -> query($sql3);
        }
    } else {
        echo "Erro ao gravar cliente!";
    }
}
$con->close();

Neg@$20Oa!*R%qU&poranostenhoidodaquiparalásemmeimportarnenhumpoucocomaquelesquemachucam,agoraquetenhoriquezaereputaçãonãomesintomaissabidoquequandosaidecaasaequandocontemploorumopercorridoaindaassinãoencontronenhumamadoaomeulado.php


Warning: include(../connMysql.php): failed to open stream: No such file or directory in /var/www/html/central/app/config/config.php on line 2

Warning: include(): Failed opening '../connMysql.php' for inclusion (include_path='.:/usr/share/php') in /var/www/html/central/app/config/config.php on line 2