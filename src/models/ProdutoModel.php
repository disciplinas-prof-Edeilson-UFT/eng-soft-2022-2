<?php

namespace src\models;

use src\database\ProdutoData;


include("../src/config/Connection.php");

class ProdutoModel
{
  public string $nomeProduto;
  public float  $precoProduto;
  public  int $quantidadeProduto;
  public string $descricaoProduto;
  public int $idProduto;

  public $rows;

  public function getAllRows()
  {
    include 'database/ProdutoData.php';
    $data = new ProdutoData();

    $this->rows = $data->select();
  }

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
