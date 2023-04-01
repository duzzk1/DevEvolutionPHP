<?php


$raio = floatval(fgets(STDIN));

$n = 3.14159;

$area = number_format($n * pow($raio, 2), 4, ".", "");

echo "A=".$area."\n";