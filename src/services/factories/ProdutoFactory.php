<?php

namespace src\services\factories;

use src\api\src\controllers\ProdutoController as controller;

use src\services\ApiConfig;

require_once 'vendor/autoload.php';

class ProdutoFactory
{
  private $apiConfig;

  public function __construct(ApiConfig $apiConfig)
  {
    $this->apiConfig = $apiConfig;
  }

  public function getTodos($data)
  {
    return $this->apiConfig->instance("/produtos", 'get', $data);
  }

  public function getUm($id, $data)
  {
    return $this->apiConfig->instance("/produtos/$id", 'get', $data);
  }

  public function getNome($nome, $data)
  {
    $controller = new controller();
    $response = $controller->anyShow($nome);

    return $response;
  }
}
