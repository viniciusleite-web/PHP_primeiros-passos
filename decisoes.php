<?php

$idade = 16;


$nome = 'Vinicius';

echo "Você só pode entrar se tiver a partir de 18 anos." . PHP_EOL;
if($idade >= 18 and $nome == 'Vinicius'){
    echo "Você tem $idade anos" . PHP_EOL;
    echo 'Pode entrar';
}