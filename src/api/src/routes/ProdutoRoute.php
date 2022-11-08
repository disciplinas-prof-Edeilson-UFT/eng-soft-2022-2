<?php

namespace src\api\src\routes;

use src\api\src\controllers\ProdutoController;

require_once 'vendor/autoload.php';

class ProdutoRoute
{
  private $method;
  private $payload;
  private $query;
  private $params;
  const GET = 'get';
  const POST = 'post';
  const PATCH = 'patch';
  const DELETE = 'delete';

  public function __construct($method, $payload, $query)
  {
    $this->method = $method;
    $this->payload = $payload;
    $this->query = $query;
  }

  public function produtoRouting()
  {

    $produtoController = new ProdutoController();

    switch ($this->method) {
      case self::GET:
        if ($this->query['id_produto']) {
          echo json_encode($produtoController->uniqueShow($this->query['id_produto']));
          // echo json_encode($produtoController->uniqueShow());
          return;
        }
        echo json_encode($produtoController->show());
        break;
      case self::POST:
        break;
      case self::PATCH:
        break;
      case self::DELETE:
        break;
      default:
        break;
    }
  }
}
