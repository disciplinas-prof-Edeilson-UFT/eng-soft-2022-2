<?php

namespace src\models;

use src\database\ProdutoData;

/* Classe de Modelo da entidade, que vai fazer uso das funções predefinidas na camada database na qual fazem requisições ao banco de dados e em seguida manipular os objetos a fim de serem chamada por fim na camada Controller*/

class ProdutoModel
{
  // public string $nomeProduto;
  // public float  $precoProduto;
  // public  int $quantidadeProduto;
  // public string $descricaoProduto;
  // public int $idProduto;

  public $rows;
  public $show;

  /* Função que seta uma nova instancia do objeto da camada de database e recupera todas as linhas retornadas pela mesma em um vetor através da função da camada database "select()", feito isso essa função será chamada na camada de controllers */
  public function getAllRows()
  {
    include __DIR__ . '/../database/ProdutoData.php';
    $data = new ProdutoData();

    $this->rows = $data->select();
  }

  public  function getById(int $id_produto)
  {
    include __DIR__ . '/../database/ProdutoData.php';
    $data = new ProdutoData();

    $this->rows = $data->selectById($id_produto);
    $this->show = $data->select();

    return $this->rows;
  }

  public  function getByAny($dado)
  {
    include __DIR__ . '/../database/ProdutoData.php';
    $data = new ProdutoData();

    $this->rows = $data->selectByAny($dado);
    $this->show = $data->select();

    return $this->rows;
  }
}
