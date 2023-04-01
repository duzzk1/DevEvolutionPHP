<?php

use PSpell\Config;

class ContaBancaria{
    private $saldo;

    public function __construct($saldo)
    {
        $this->saldo = $saldo;
        echo "Saldo inicial: $this->saldo\n";
    }
    public function sacar($valor){
        if($this->saldo > $valor){
            echo "SACOU: $valor";
            $this->saldo -= $valor;
            echo "\n";
        }else{
            echo "Saldo indisponível!\n";
            echo "Você tentou sacar $valor e seu saldo é $this->saldo";
            echo "\n";

        }
    }
    
    public function depositar($valor){
        if ($valor > 0){
        echo "DEPOSITOU: $valor";
        $this->saldo += $valor;
        echo "\n";
        }else{
            echo "Você não pode depositar um valor negativo!\n";
        }
    }

    public function getSaldo(){
        echo "SALDO ATUAL: ";
        echo $this->saldo;
        echo "\n";

    }
    
}


$conta1 = new ContaBancaria(5000);


$conta1->depositar(2000);

$conta1->getSaldo();

$conta1->sacar(5000);

$conta1->getSaldo();

$conta1->sacar(250);

$conta1->getSaldo();

$conta1->depositar(-344);





?>