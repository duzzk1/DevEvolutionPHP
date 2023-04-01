<?php
class Funcionarios{
    protected $nome;
    protected $rg;
    protected $salarioBase;
    protected $salarioTotal;

    // Get nome e RG
    public function getNome(){
        return $this->nome;
    }
    public function getRG(){
        return $this->rg;
    }

    // Get salário base
    public function getSalarioBase(){
        return $this->salarioBase;
    }
}

class Vendedores extends Funcionarios{
    private $vendas = 0;
    private $comissao;
    public function __construct($nome, $rg, $salarioBase)
    {
        $this->nome = $nome;
        $this->rg = $rg;
        $this->salarioBase = $salarioBase;
    }
    
    // Manipula Vendas 
    public function setVendas($vendas){
        $this->vendas = $vendas;
    }

    public function getVendas(){
        return $this->vendas;
    }

    //Comissão

    private function comissao(){
        return $this->comissao = $this->vendas * 0.05;
    }

    public function getSalarioTotal(){
        if ($this->comissao > 0){
        return $this->salarioTotal = $this->salarioBase * $this->comissao;
        }else{
            echo "Você não vendeu esse mês!\n";
            echo "Seu salario foi ".$this->salarioBase;
        }
    }
}

$vendedor = new Vendedores("Eduardo", 124543, 2000);

echo "Vendedor: ".$vendedor->getNome()."\n";
echo "RG: ".$vendedor->getRG()."\n";

echo "Salario base: ".$vendedor->getSalarioBase()."\n";
echo "Total em vendas: ".$vendedor->getVendas()."\n";

echo "Salario total: ".$vendedor->getSalarioTotal()."\n";



?>