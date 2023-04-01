<?php 

class Pessoa {
    protected  $nome;
    protected $idade;
    protected $sexo;
}

class Funcionario extends Pessoa{

    private $salario;
    private $cargo;
    public function __construct($nome, $idade, $sexo, $salario, $cargo)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->salario = $salario;
        $this->cargo = $cargo;

    }

    public function getCargo(){
        return $this->cargo;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getSexo(){
        return $this->sexo;
    }
    public function getSalario(){
        return $this->salario;
    }

}


$funcionario1 = new Funcionario("Zé", 35, "M", 2300, "Porteiro");


echo "Bem vindo! ".$funcionario1->getCargo()." ".$funcionario1->getNome()." "." seu salário atual é de ".$funcionario1->getSalario();




?>