<?php

$v1 = readline();


$array = explode(" ", $v1);

$maior = ($array[0]+$array[1]+abs($array[0]-$array[1]))/2;

echo "$maior eh o maior\n";
