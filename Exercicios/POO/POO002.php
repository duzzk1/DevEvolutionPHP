<?php

use PSpell\Config;

class ContaBancaria{
    private $saldo;
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
        echo "DEPOSITOU: $valor";
        $this->saldo += $valor;
        echo "\n";

    }

    public function getSaldo(){
        echo "SALDO ATUAL: ";
        echo $this->saldo;
        echo "\n";

    }
    
}


$conta1 = new ContaBancaria();


$conta1->depositar(2000);

$conta1->getSaldo();

$conta1->sacar(5000);

$conta1->getSaldo();

$conta1->sacar(250);

$conta1->getSaldo();





?>