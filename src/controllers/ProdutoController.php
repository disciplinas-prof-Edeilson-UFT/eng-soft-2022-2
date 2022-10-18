<?php

namespace src\controllers;

use src\models\ProdutoModel;

class ProdutoController
{
  public static function index()
  {
    include 'models/ProdutoModel.php';

    $model = new ProdutoModel();
    $model->getAllRows();

    include 'views/pages/ListaProdutos.php';
  }
}
