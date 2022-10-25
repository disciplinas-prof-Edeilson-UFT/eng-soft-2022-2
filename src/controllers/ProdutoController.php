<?php

namespace src\controllers;

use src\models\ProdutoModel;
use src\database\ProdutoData;

/* Camada de Controle que estão presente as regras de negocio referente às entidades, de forma geral, contem funções que manipulam os determinados eventos que devem acontecer na camada de visualização*/

class ProdutoController
{

  /* Função principal quando se trata da listagem dos produtos, ela basicamente instancia um novo objeto modelo e chama funções presentes na camada de Modelo que por sua vez comunica com a camada database */

  //View -> Controller -> Modelo -> Data

  public static function index()
  {
    include 'models/ProdutoModel.php';

    $model = new ProdutoModel();
    $model->getAllRows();
    var_dump($model);

    include 'views/pages/ListaProdutos.php';
  }

  public static function unique()
  {
    include 'models/ProdutoModel.php';
    $model = new ProdutoModel();
    $model->getProduct();
    var_dump($model);

    include 'views/pages/Produto.php';
  }
}
