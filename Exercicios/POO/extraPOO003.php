<?php
class Funcionarios
{
    protected $nome;
    protected $rg;
    protected $salarioBase;
    protected $salarioTotal;

    // Get nome e RG
    public function getNome()
    {
        return $this->nome;
    }
    public function getRG()
    {
        return $this->rg;
    }

    // Get salário base
    public function getSalarioBase()
    {
        return $this->salarioBase;
    }
}

// VENDEDORES

class Vendedores extends Funcionarios
{
    private $vendas = 0;
    private $comissao;
    public function __construct($nome, $rg, $salarioBase)
    {
        $this->nome = $nome;
        $this->rg = $rg;
        $this->salarioBase = $salarioBase;
    }

    // Manipula Vendas 
    public function setVendas($vendas)
    {
        if ($vendas >= 0) {
            $this->vendas = $vendas;
        } else {
            echo "O valor não pode ser negativo";
        }
    }

    public function getVendas()
    {
        return $this->vendas;
    }

    //Comissão

    private function comissao()
    {
        return $this->comissao = $this->vendas * 0.05;
    }

    public function getSalarioTotal()
    {
        if ($this->comissao() > 0) {
            return $this->salarioTotal = $this->salarioBase + $this->comissao();
        } else {
            echo "Você não vendeu esse mês!\n";
            echo "Seu salario foi " . $this->salarioBase;
        }
    }
}

$vendedor = new Vendedores("Eduardo", 124543, 2000);
$vendedor->setVendas(1000);

echo "Vendedor: " . $vendedor->getNome() . "\n";
echo "RG: " . $vendedor->getRG() . "\n";

echo "Salario base: " . $vendedor->getSalarioBase() . "\n";
echo "Total em vendas: " . $vendedor->getVendas() . "\n";

echo "Salario total: " . $vendedor->getSalarioTotal() . "\n";

echo "\n";

// ADMINISTRATIVO 

class Administrativo extends Funcionarios
{
    private $horas = 0;
    private $extras;
    public function __construct($nome, $rg, $salarioBase)
    {
        $this->nome = $nome;
        $this->rg = $rg;
        $this->salarioBase = $salarioBase;
    }

    // Manipula horas 
    public function setHoras($horas)
    {
        if ($horas >= 0) {
            $this->horas = $horas;
        } else {
            echo "O valor não pode ser negativo";
        }
    }

    public function getHoras()
    {
        return $this->horas;
    }

    //Extras

    private function extras()
    {
        return $this->extras = $this->horas * 0.01;
    }

    public function getSalarioTotal()
    {
        if ($this->extras() > 0) {
            return $this->salarioTotal = ($this->salarioBase * $this->extras()) + $this->salarioBase;
        } else {
            echo "Você não teve horas extras esse mês!\n";
            echo "Seu salario foi " . $this->salarioBase;
        }
    }
}

$administrativo = new Administrativo("Duzin", 642312, 1800);
$administrativo->setHoras(15);

echo "Funcionário: " . $administrativo->getNome() . "\n";
echo "RG: " . $administrativo->getRG() . "\n";

echo "Salario base: " . $administrativo->getSalarioBase() . "\n";
echo "Total em horas extras: " . $administrativo->getHoras() . "\n";
echo "Salario total: " . $administrativo->getSalarioTotal() . "\n";
