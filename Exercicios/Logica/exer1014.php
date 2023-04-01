<?php 
$X = fgets(STDIN);
$Y = number_format(fgets(STDIN),1,".","");
$consumo = $X / $Y;

echo number_format($consumo,3,".","")." km/l";