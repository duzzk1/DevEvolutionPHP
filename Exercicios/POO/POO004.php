<?php 
interface FormaGeometrica {
  public function calcularArea();
  public function calcularPerimetro();
}

class Retangulo implements FormaGeometrica {
  private $base;
  private $altura;
  
  public function __construct($base, $altura) {
    $this->base = $base;
    $this->altura = $altura;
  }
  
  public function calcularArea() {
    return $this->base * $this->altura;
  }
  
  public function calcularPerimetro() {
    return 2 * ($this->base + $this->altura);
  }
}

class Circulo implements FormaGeometrica {
  private $raio;
  
  public function __construct($raio) {
    $this->raio = $raio;
  }
  
  public function calcularArea() {
    return pi() * pow($this->raio, 2);
  }
  
  public function calcularPerimetro() {
    return 2 * pi() * $this->raio;
  }
}

class Triangulo implements FormaGeometrica {
  private $lado1;
  private $lado2;
  private $lado3;
  private $semiPerimetro;

  public function __construct($lado1, $lado2, $lado3) {
    $this->lado1 = $lado1;
    $this->lado2 = $lado2;
    $this->lado3 = $lado3;

  }

  public function calcularSemiPerimetro(){
     $semiPerimetro = ($this->lado1+$this->lado2+$this->lado3)/2;
     return $semiPerimetro;
  }
  
  public function calcularArea() {
    if ($this->semiPerimetro !== 0){
    return sqrt($this->calcularSemiPerimetro() * ($this->calcularSemiPerimetro() - $this->lado1) * ($this->calcularSemiPerimetro() - $this->lado2) * ($this->calcularSemiPerimetro() - $this->lado3));
    }else{
      echo "Para ter área do Triangulo você precisa calcular o Semi Perimetro antes!\nPara isso use a função calcularSemiPerimetro()\n";
    }
  }
  
  public function calcularPerimetro() {
    return $this->lado1 + $this->lado2 + $this->lado3;
  }
}


$retangulo = new Retangulo(10, 5);

$circulo = new Circulo(18);

$triangulo = new Triangulo(6, 5, 9);


echo "Respostas: \n";

echo "Semi perimetro do triangulo: ".$triangulo->calcularSemiPerimetro()."\n";
echo "Área do triangulo: ~".round($triangulo->calcularArea())."\n";
echo "Perímetro do triangulo: ".$triangulo->calcularPerimetro()."\n";

echo "Área do circulo: ~".round($circulo->calcularArea())."\n";
echo "Perímetro do circulo: ~".round($circulo->calcularPerimetro())."\n";


echo "Área do retangulo: ".$retangulo->calcularArea()."\n";
echo "Perímetro do retangulo: ".$retangulo->calcularPerimetro()."\n";



?>