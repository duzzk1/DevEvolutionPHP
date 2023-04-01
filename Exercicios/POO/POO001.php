<?php

class Pessoa {
    public  $nome;
    public $idade;
    public $sexo;
}

class Juridico extends Pessoa{
    private $cnpj;
    public function __construct($nome, $idade, $sexo, $cnpj)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->cnpj = $cnpj;
    }
    public function getCnpj(){
        return $this->cnpj;
    }
    
}

class Fisica extends Pessoa{
    private $cpf;
    public function __construct($nome, $idade, $sexo, $cpf)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->sexo = $sexo;
        $this->cpf = $cpf;
    }
    public function getCpf(){
        return $this->cpf;
    }
    
}

$pessoa1 = new Juridico("Eduardo", 23, "M", 2848195178);

$pessoa2 = new Fisica("Eduardo", 23, "M", 2848195178);


echo "Pessoa Juridica:\n\n";
echo "Nome: $pessoa1->nome\n";
echo "A idade da Pessoa 1 é $pessoa1->idade\n";
echo "O sexo da Pessoa 1 é $pessoa1->sexo\n";
echo "O CNPJ da Pessoa 1 é " .$pessoa1->getCnpj()."\n";
echo "\n";

echo "Pessoa Fisica:\n\n";
echo "Nome: $pessoa2->nome\n";
echo "A idade da Pessoa 1 é $pessoa2->idade\n";
echo "O sexo da Pessoa 1 é $pessoa2->sexo\n";
echo "O CNPJ da Pessoa 1 é ".$pessoa2->getCpf()."\n";
echo "\n"

?>