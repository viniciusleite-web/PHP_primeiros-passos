<?php

$idade = 17;


$nome = 'Vinicius';
$numeroDePessoas  = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou";
 echo " a partir de 16 anos se tiver acompanhado." . PHP_EOL;
if($idade >= 18){
    echo "Você tem $idade anos . Pode entrar sozinho. " . PHP_EOL;
    
}else if($idade >= 16 && $numeroDePessoas > 1){
    echo "Você tem $idade anos , está acompanhado(a) , então pode entrar.";

}else{
    echo "Você só tem $idade anos . Você não pode entrar";
}


echo PHP_EOL;
echo "Adeus!";