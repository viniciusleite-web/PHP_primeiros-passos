<?php

function sacar($conta, $valorAsacar) {
    if($valorAsacar > $conta['saldo']){
        exibeMenssagem('Você não pode sacar');
    }else{
        $conta['saldo'] -= $valorAsacar;
    }

    return $conta;
}

function exibeMenssagem($menssagem){
    echo $menssagem . PHP_EOL;
}

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
$contasCorrentes['123.446.756-11'] = sacar($contasCorrentes['123.446.756-11'], 500);

$contasCorrentes['127.456.756-12'] = sacar($contasCorrentes['127.456.756-12'], 500);

foreach($contasCorrentes as $cpf => $conta){
   exibeMenssagem( $cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}

