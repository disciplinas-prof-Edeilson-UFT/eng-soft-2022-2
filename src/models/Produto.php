<?php

namespace src\models;

class ProdutoModel
{
  private string $nomeProduto;
  private float  $precoProduto;
  private  int $quantidadeProduto;
  private string $descricaoProduto;
  private int $idProduto;

  public function setNomeProduto(string $nomeProduto)
  {
    $this->nomeProduto = $nomeProduto;
  }


  public function setPrecoProduto(float $precoProduto)
  {
    $this->precoProduto = $precoProduto;
  }


  public function setQuantidadeProduto(int $quantidadeProduto)
  {
    $this->quantidadeProduto = $quantidadeProduto;
  }


  public function setDescricaoProduto(string $descricaoProduto)
  {
    $this->descricaoProduto = $descricaoProduto;
  }

  public function getNomeProduto()
  {
    return $this->nomeProduto;
  }


  public function getPrecoProduto()
  {
    return $this->precoProduto;
  }


  public function getQuantidadeProduto()
  {
    return $this->quantidadeProduto;
  }


  public function getDescricaoProduto()
  {
    return $this->descricaoProduto;
  }

  public function getIdProduto()
  {
    return $this->idProduto;
  }
}
