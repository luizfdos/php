<?php

require_once 'funcoes.php';

$contasCorrentes = [
  '123.456.789-10' => [
    'titular' => 'Luiz',
    'saldo' => 1000
  ], 
  '123.456.689-11' => [
    'titular' => 'Maria',
    'saldo' => 10000
  ], 
  '123.256.789-12' => [
    'titular' => 'Alberto',
    'saldo' => 300,
  ]
];

$contasCorrentes['123.456.789-10'] = sacar(
  $contasCorrentes['123.456.789-10'], 500);

$contasCorrentes['123.256.789-12'] = depositar(
  $contasCorrentes['123.256.789-12'], 300);

unset($contasCorrentes['123.256.789-12']);

titularComLetrasMaiusculas($contasCorrentes['123.456.689-11']);

foreach ($contasCorrentes as $cpf => $conta) {
  exibeConta($conta);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Contas Correntes</h1>
  
  <dl>
    <?php foreach($contasCorrentes as $cpf => $conta) { ?>
    <dt>
    <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
    </dt>
    <dd>
    Saldo: <?= $conta['saldo']; ?>
    </dd>
    <?php } ?>
  <dl>
</body>
</html>
