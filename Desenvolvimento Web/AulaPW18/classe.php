<?php

class Produto
{
  private $descricao;
  private $preco;

  public function __construct()
  {
    $this->descricao = '';
    $this->preco = '';
  }

  public function getDetalhes()
  {
    echo "Descrição: $this->descricao - Preço: $this->preco";
  }

  public function getDescricao()
  {
    return $this->descricao;
  }

  public function setDescricao($value)
  {
    $this->descricao = $value;
  }

  public function getPreco()
  {
    return $this->preco;
  }

  public function setPreco($value)
  {
    $this->preco = 'R$ ' . number_format($value, 2, ",", ".");
  }
}

$prod = new Produto();
$prod->setDescricao('Notebook Dell');
$prod->setPreco(3799.00);
echo $prod->getDetalhes();
