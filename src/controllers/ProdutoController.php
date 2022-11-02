<?php

namespace src\controllers;

use src\models\ProdutoModel;

/* Camada de Controle que estão presente as regras de negocio referente às entidades, de forma geral, contem funções que manipulam os determinados eventos que devem acontecer na camada de visualização*/

class ProdutoController
{

  /* Função principal quando se trata da listagem dos produtos, ela basicamente instancia um novo objeto modelo e chama funções presentes na camada de Modelo que por sua vez comunica com a camada database */
  //View -> Controller -> Modelo -> Data

  public static function index()
  {
    include __DIR__ . '/../models/ProdutoModel.php';
    $model = new ProdutoModel();
    if (!empty($_GET['search'])) {
      $data = $_GET['search'];
      $model->getByAny($data);
    } else {
      $model->getAllRows();
    }


    include __DIR__ . '/../views/pages/ListaProdutos.php';
  }

  public static function unique()
  {
    include __DIR__ . '/../models/ProdutoModel.php';
    $model = new ProdutoModel();

    if (isset($_GET['id_produto']))
      $model = $model->getById((int) $_GET['id_produto']);

    include __DIR__ . '/../views/pages/Produto.php';
  }
}
