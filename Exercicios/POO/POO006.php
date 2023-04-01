<?php
abstract class Animal {
    private $nome;
    private $raca;
    public abstract function emitirSom();
    
    public function __construct($nome, $raca)
    {
        $this->nome = $nome;
        $this->raca = $raca;
    } 
    public function getNome(){
        return $this->nome;
    }
    public function getRaca(){
        return $this->raca;
    }
}

class Cachorro extends Animal{

     function emitirSom()
    {
        echo "Au au!\n\n";
    }
}

class Gato extends Animal{

     function emitirSom()
   {
       echo "Miau!\n\n";
   }
}

$dog = new Cachorro("Brad", "Husky");
$cat = new Gato("Alice","Ragdoll");

echo "Cachorro \n";

echo "Nome: ".$dog->getNome()."\n";
echo "Raça: ".$dog->getRaca()."\n";

$dog->emitirSom();

echo "Gato \n";

echo "Nome: ".$cat->getNome()."\n";
echo "Raça: ".$cat->getRaca()."\n";

$cat->emitirSom();

?>