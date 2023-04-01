<?php 

class Pilha{
    private $itens;
    public function __construct()
    {
        $this->itens = array();
    }

    public function setItem($item){
        array_push($this->itens, $item);
    }

    public function removeItem(){
        array_pop($this->itens);
    }
    public function getItens(){
        print_r($this->itens); 
    }
    public function sizePilha(){
         return count($this->itens);
    }
}


$canais = new Pilha;
$canais->setItem("SBT");
$canais->setItem("SPORTV 2");
echo "Número de canais registrados: (antes do remove) ".$canais->sizePilha()."\n";
$canais->removeItem();

echo "Número de canais registrados: (depois do remove) ".$canais->sizePilha()."\n";

?>