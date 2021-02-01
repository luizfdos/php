<?php 

function criarConta(string $cpf, string $nometiTular, float $saldo): array 
{
  return [
    $cpf => [
      'titular' => $nometiTular,
      'saldo' => $saldo,
    ]
  ];
};