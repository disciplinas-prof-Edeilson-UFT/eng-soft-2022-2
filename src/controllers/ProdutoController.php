<?php

namespace src\controllers;



require_once 'vendor/autoload.php';

use src\models\ProdutoModel;
use src\services\Api;

/* Camada de Controle que estão presente as regras de negocio referente às entidades, de forma geral, contem funções que manipulam os determinados eventos que devem acontecer na camada de visualização*/

class ProdutoController
{

  public function todosProdutos()
  {
    $api = new Api();
    $data = array();
    if (!empty($_GET['search'])) {
      $id = $_GET['search'];
      $response = $api->produto()->getNome($id, $data);
    } else {
      $response = $api->produto()->getTodos($data);
    }
    return $response;
    echo $response;
  }

  public function umProduto($id)
  {
    $api = new Api();
    $data = array();
    $response = $api->produto()->getUm($id, $data);
    return $response;
    echo $response;
  }
}
