<?php
// foi criado uma função para calcular a area de um retangulo
function calcRetan($b1,$h1){
    return $b1 * $h1;
}
// foi criado uma função para calcular a area de um paralelogramo
function calcPar($a, $b){
    return 2 * ($a + $b);
}
// essa função seleciona qual das duas primeiras funções irá ser usada através do "r" e do "p".
function select($tipo, $valor){
    if($tipo == 'r'){
        return calcRetan($valor[0],$valor[1]);
    }
    elseif($tipo == 'p'){
        return calcPar($valor[0], $valor[1]);
    }
}