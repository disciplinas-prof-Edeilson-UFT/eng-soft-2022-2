<?php

namespace src\api\src\controllers;

require_once 'vendor/autoload.php';

use src\api\src\models\ProdutoModel;

class ProdutoController
{
  public static function show()
  {
    $model = new ProdutoModel();
    $var = $model->select();

    return $var;
  }

  //AS duas funções uniqueShow Funcionam perfeitamente porem essa a seguir está mais de acordo com uma regra de negócio.
  public static function uniqueShow($produtoId)
  {
    $model = new ProdutoModel();
    $var = $model->selectById($produtoId);
    if (!$var)
      return array(
        "message" => "Produto não encontrado"
      );

    return $var;
  }

  public static function anyShow($nomeProduto)
  {
    $model = new ProdutoModel();
    $var = $model->selectByAny($nomeProduto);
    if (!$var)
      return array(
        "message" => "Produto não encontrado"
      );

    return $var;
  }

  // public static function uniqueShow()
  // {
  //   $model = new ProdutoModel();
  //   if (isset($_GET['id_produto']))
  //     $var = $model->selectById((int) $_GET['id_produto']);

  //   return $var;
  // }
}
