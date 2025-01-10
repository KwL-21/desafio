<?php

//TRATAMENTO PARA DATA
// 29/06/2013 dd/mm/aaaa ---> aaaa-mm-dd

function databanco($dtnasc) {
    $data = explode("/", $dtnasc); //[29][06][2013]
    $data = array_reverse($data); // [2013][06][29]
    $dtnasc = implode("-", $data);

    return $dtnasc;
}

//VEIO DO BANCO
function databusca($dtnasc) {
    //2013-06-29
    $data = explode("-", $dtnasc);  //[2013][06][29]
    $data = array_reverse($data); // [29][06][2013]
    $dtnasc = implode("/", $data); //29/06/2013

    return $dtnasc;
}

?>
