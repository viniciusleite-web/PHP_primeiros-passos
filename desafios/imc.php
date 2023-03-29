<?php

$peso = 64;
$altura = 1.61;

$imc = $peso / $altura ** 2;

echo "O seu IMC é  $imc . Voce está no estado " ;
if($imc < 18.5 ){
    echo "MAGREZA" ;
}elseif ($imc > 18.5 && $imc <  24.9) {
    echo "NORMAL";
}elseif($imc > 25 && $imc < 29.9) {
    echo "SOBREPESO";
}elseif($imc > 30 && $imc < 39.9){
    echo "OBESIDADE";
}elseif( $imc > 40){
    echo "OBESIDADE GRAVE";
}


