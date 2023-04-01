<?php 
interface FormaGeometrica{
    public function CalcularArea();
    public function CalcularPerimetro();
}

class Retangulo implements FormaGeometrica{
    public $base;
    public $altura;

    public function calcularArea() {
        return $this->base * $this->altura;
      }
      
      public function calcularPerimetro() {
        return 2 * ($this->base + $this->altura);
      }
    }

    class Circulo implements FormaGeometrica {
        public $raio;
        
        public function calcularArea() {
          return pi() * pow($this->raio, 2);
        }
        
        public function calcularPerimetro() {
          return 2 * pi() * $this->raio;
        }
      }
?>