<?php

$contasCorrentes = [
   12345675610 => [
    'titular' => 'Vinicius',
    'saldo' => 1000
],
   12344675611 =>[
    'titular' => 'Maria',
    'saldo' => 10000
],
   12745675690 =>[
    'titular' => 'Alberto',
    'saldo' => 300
],
    
];

foreach($contasCorrentes as $cpf => $conta){
    echo $cpf . PHP_EOL;
}