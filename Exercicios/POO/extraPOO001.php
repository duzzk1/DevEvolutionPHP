<?php 
class Pedido{
    private $numero;
    private $descricao;
    private $quantidade;
    private $preco;

    public function __construct($numero,$descricao,$quantidade,$preco)
    {
        $this->numero = $numero;
        $this->descricao = $descricao;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
    }
    // SET
    public function setNumero($numero){
        $this->numero = $numero;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function setQuantidade($quantidade){
        $this->quantidade = $quantidade;
    }
    public function setPreco($preco){
        $this->preco = $preco;
    }
    //GET 
    public function getNumero(){
        return $this->numero;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }
    public function getPreco(){
        return $this->preco;
    }
    //CALCULO
    public function calcula(){
        return $this->quantidade * $this->preco;
    }
}


$fatura1 = new Pedido(1,"Notebook",2,4849);

echo "Número da fatura: ".$fatura1->getNumero()."\n";
echo "Descrição do item: ".$fatura1->getDescricao()."\n";
echo "Quantidade do item: ".$fatura1->getQuantidade()."\n";
echo "Preço do item: ".$fatura1->getPreco()."\n";
echo "Valor da fatura: ".$fatura1->calcula();




?>