<?php 

class Pessoa {
    public  $nome;
    public $idade;
    public $sexo;
}

class Funcionario extends Pessoa{
    public $salario;

}


$porteiro = new Funcionario;

$porteiro->nome = "Zé";
$porteiro->idade = "42";
$porteiro->sexo = "M";

$porteiro->salario = 1850;



?>