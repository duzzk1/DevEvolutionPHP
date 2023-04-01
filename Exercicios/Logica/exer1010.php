<?php
$P1 = readline();
$P2 = readline();

$prod1 = explode(" ", $P1);
$prod2 = explode(" ", $P2);

$calculaVal1 = $prod1[1]*$prod1[2];

$calculaVal2 = $prod2[1]*$prod2[2];

$somaQtd = number_format($calculaVal1 + $calculaVal2, "2",".","");

echo "VALOR A PAGAR: R$ ".$somaQtd;
