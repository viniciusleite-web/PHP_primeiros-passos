<?php

$idade = 17;


$nome = 'Vinicius';
$numeroDePessoas  = 1;

echo "Você só pode entrar se tiver a partir de 18 anos ou";
 echo "a partir de 16 anos se tiver acompanhado." . PHP_EOL;
if($idade >= 18){
    echo "Você tem $idade anos" . PHP_EOL;
    echo 'Pode entrar';
}else{
    echo "Você só tem $idade anos . Você não pode entrar";
}

echo PHP_EOL;
echo "Adeus!";