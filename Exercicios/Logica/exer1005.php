<?php 
$A = floatval(fgets(STDIN)*3.5);

$B = floatval(fgets(STDIN)*7.5);


$MEDIA = ($A + $B) / 11;

echo "MEDIA = ".number_format($MEDIA, 5, ".","")."\n";