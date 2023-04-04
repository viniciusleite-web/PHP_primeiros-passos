<?php

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

if( 500 > $contasCorrentes['123.446.756-11']['saldo']){
    exibeMenssagem("Você não pode sacar esse valor");
}else{
    $contasCorrentes['123.446.756-11']['saldo'] -= 500;
}

if (500 > $contasCorrentes['127.456.756-12']['saldo']){
    exibeMenssagem( "Você não pode sacar esse valor");
}else {
    $contasCorrentes['127.456.756-12']['saldo'] -= 500;
}


foreach($contasCorrentes as $cpf => $conta){
   exibeMenssagem( $cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);
}
