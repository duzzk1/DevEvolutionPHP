<?php 

class Carro {
    private $marca;
    private $modelo;
    private $ano;
    private $velocidadeAtual;


    public function __construct($marca, $modelo, $ano, $velocidadeAtual)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->velocidadeAtual = $velocidadeAtual;
    }

    public function acelera(){
        return $this->velocidadeAtual += 1;
    }

    public function freia(){
        return $this->velocidadeAtual -= 1;
    }

    public function getVelocidadeAtual(){
        return $this->velocidadeAtual;
    }
}

$carro1 = new Carro("FIAT", "Uno", 1999, 0);


while ($carro1->getVelocidadeAtual() < 30){
    $carro1->acelera();
    echo "Velocimetro: ".$carro1->getVelocidadeAtual()."\n";
}



?>