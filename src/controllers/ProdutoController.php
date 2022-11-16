<?php

namespace src\controllers;



require_once 'vendor/autoload.php';

use src\models\ProdutoModel;
use src\services\Api;

// include __DIR__ . '/../models/ProdutoModel.php';
/* Camada de Controle que estão presente as regras de negocio referente às entidades, de forma geral, contem funções que manipulam os determinados eventos que devem acontecer na camada de visualização*/

class ProdutoController
{

  public function todosProdutos()
  {
    $api = new Api();
    $data = array();
    if (!empty($_GET['search'])) {
      $id = $_GET['search'];
      $response = $api->produto()->getNome($id, $data);  //gambira
    }else{
      $response = $api->produto()->getTodos($data);
    }
    return $response;
    echo $response;
  }

  public function umProduto($id)
  {
    $api = new Api();
    $data = array();
    $response = $api->produto()->getUm($id, $data); //COMO PASSAR O PRIMEIRO PARAMETRO
    return $response;
    echo $response;
  }



  /* Função principal quando se trata da listagem dos produtos, ela basicamente instancia um novo objeto modelo e chama funções presentes na camada de Modelo que por sua vez comunica com a camada database */
  //View -> Controller -> Modelo -> Data

  public static function index()
  {
    $model = new ProdutoModel();
    if (!empty($_GET['search'])) {
      $data = $_GET['search'];
      $var = $model->getByAny($data);
    } else {
      $var = $model->getAllRows();
    }

    return $var;
  }

  public static function unique()
  {
    $model = new ProdutoModel();
    if (isset($_GET['id_produto']))
      $var = $model->getById((int) $_GET['id_produto']);

    return $var;
  }
}
