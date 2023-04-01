<?php 
$A = floatval(fgets(STDIN)*2);

$B = floatval(fgets(STDIN)*3);

$C = floatval(fgets(STDIN)*5);

$MEDIA = ($A + $B + $C) / 10;

echo "MEDIA = ".number_format($MEDIA, 1, ".","")."\n";