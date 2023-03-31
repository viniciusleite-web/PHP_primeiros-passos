<?php

$contasCorrentes = [
   '123.456.756-10' => [
    'titular' => 'Vinicius',
    'saldo' => 1000
],
   '123.446.756-11' =>[
    'titular' => 'Maria',
    'saldo' => 10000
],
   '127.456.756-12' =>[
    'titular' => 'Alberto',
    'saldo' => 300
],
    
];
$contasCorrentes['127.856.756-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach($contasCorrentes as $cpf => $conta){
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}