<?php 

$val = fgets(STDIN);

$valExplode = explode(" ", $val);

$pi = 3.14159;

$areaTriangulo = ($valExplode[0] * $valExplode[2])/2;

$areaCirculo = $pi * pow($valExplode[2], 2);

$areaTrapezio = ($valExplode[0]+$valExplode[1])*$valExplode[2]/2;

$areaQuadrado = pow($valExplode[1], 2);

$areaRetangulo = $valExplode[0] * $valExplode[1];

echo "TRIANGULO:". number_format($areaTriangulo, 3, ".","");
echo "CIRCULO:". number_format($areaCirculo, 3,".","");
echo "TRAPEZIO:". number_format($areaTrapezio, 3,".","");
echo "QUADRADO:". number_format($areaQuadrado, 3,".","");
echo "RETANGULO:". number_format($areaRetangulo, 3,".","");
