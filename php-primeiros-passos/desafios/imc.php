<?php 

$altura = 1.74;
$peso = 120;
$imc = $peso / $altura ** $altura;

echo "Seu imc é de $imc. Você está ";

if ($imc < 18.5) {
  echo "abaixo ";
} else if ($imc >= 18.5 && $imc <= 24.99) {
  echo "dentro ";
} else if ($imc > 24.99 && $imc <= 29.99) {
  echo "acima ";
} else {
  echo "está muito acima ";
}
echo  "do peso ideal";