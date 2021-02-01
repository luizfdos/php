<?php 

$contasCorrentes = [
  12345678910 => [
    'titular' => 'Luiz',
    'saldo' => 1000
  ], 
  12345678911 => [
    'titular' => 'Maria',
    'saldo' => 10000
  ], 
  12345678912 => [
    'titular' => 'Alberto',
    'saldo' => 300,
  ]
];

// $contasCorrentes[] = [ 
//   'titular' => 'Joana',
//   'saldo' => 50
// ]; adicionará ao primeiro indice numérico disponivel

foreach ($contasCorrentes as $cpf => $conta) {
  echo $cpf . ' ' . $contasCorrentes[$cpf]['titular'] . PHP_EOL;
}

// $teste = ['a', 'b', 'c'];

// foreach ($teste as $index => $item) {
//   echo $index;
// }

