<?php 

require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->depositar(300);
$primeiraConta->sacar(500);