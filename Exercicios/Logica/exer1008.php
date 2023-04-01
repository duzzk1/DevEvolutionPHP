<?php
$number = fgets(STDIN);
$horas = fgets(STDIN);
$valorHora = floatval(fgets(STDIN));
$salary = number_format($horas * $valorHora, 2, ".", "");

echo "NUMBER = " . $number . "\n";

echo "SALARY = U$ " . $salary . "\n";
