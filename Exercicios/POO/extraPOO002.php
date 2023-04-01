<?php 

class Colaborador{
    private $nome;
    private $sobrenome;
    private $salarioMensal;

    public function __construct($nome, $sobrenome, $salarioMensal)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->salarioMensal = $salarioMensal;
    }
    //SET
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setSobrenome($sobrenome){
        $this->sobrenome = $sobrenome;
    }
    public function setSalario($salarioMensal){
        $this->salarioMensal = $salarioMensal;
    }
    //GET
    public function getNome(){
        return $this->nome;
    }
    public function getSobrenome(){
        return $this->nome;
    }
    public function getSalarioMensal(){
        return $this->salarioMensal;
    }
    //getSAlario - Anual
    public function getSalarioAnual(){
        return $this->salarioMensal * 12;
    }
    // setAumento - %
    public function setAumento($aumento){
        if ($aumento >= 1){   // VALIDA SE FOI DIGITADO O AUMENTO EM % OU JÁ DIVIDIDO POR 100, SEGUINDO A LOGICA QUE O PROGRAMA NÃO ACEITA UMA PORCENTAGEM MENOR QUE 1. 
        $salarioAntigo = $this->salarioMensal;
        return $this->salarioMensal = (($this->salarioMensal * $aumento) / 100 ) + $salarioAntigo;
        }elseif($aumento < 0){
            echo "A porcentagem de aumento não pode ser negativa!";
        }else{ 
        $salarioAntigo = $this->salarioMensal;
        return $this->salarioMensal = ($this->salarioMensal * $aumento) + $salarioAntigo;
        }
    }
}

$colaborador = new Colaborador("Eduardo", "Santos", 2000);

echo "Nome: ".$colaborador->getNome()." ".$colaborador->getSobrenome()."\n";

echo "Salário mensal atual: ".$colaborador->getSalarioMensal()."\n";
echo "Salário anual atual: ".$colaborador->getSalarioAnual()."\n";

$colaborador->setAumento(50);
echo "Você recebeu um aumento!\n";

echo "Seu salário mensal agora é: ".$colaborador->getSalarioMensal()."\n";
echo "Seu salário anual agora é: ".$colaborador->getSalarioAnual()."\n";



?>