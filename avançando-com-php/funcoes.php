<?php 

function sacar(array $conta, float $valorAsacar) : array 
{
  if ($valorAsacar > $conta['saldo']) {
    echo 'Você não pode sacar';
  } else {
    $conta['saldo'] -= $valorAsacar;
  }

  return $conta;
}

function exibeMensagem(string $mensagem)
{
  echo $mensagem . '<br>';
}

function depositar(array $conta, float $valorADepositar) : array
{
  if ($valorADepositar > 0) {
    $conta['saldo'] += $valorADepositar;
  } else {
    exibeMensagem("Depósitos precisam ser positivos");
  }
  return $conta;
}

function titularComLetrasMaiusculas(array &$conta) 
{
  $conta['titular'] = mb_strtoupper($conta['titular']);
  return $conta;
}

echo "<ul>";

function exibeConta (array $conta)
{
  ['titular' => $titular, 'saldo' => $saldo] = $conta;
  echo "<li>Titular: $titular . Saldo: $saldo</li>";
}
echo "</ul>";