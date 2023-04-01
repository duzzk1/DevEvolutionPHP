<?php 

$name = fgets(STDIN);
$salary = fgets(STDIN);
$vendas = fgets(STDIN);

$salaryTotal = number_format(round((($vendas * 15)/100)+$salary,2, PHP_ROUND_HALF_EVEN),2,".","");




echo "TOTAL = R$ ".$salaryTotal."\n";
