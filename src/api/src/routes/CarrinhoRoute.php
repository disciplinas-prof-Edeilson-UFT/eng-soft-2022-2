<?php

namespace src\api\src\routes;

use src\api\src\controllers\CarrinhoController;

require_once 'vendor/autoload.php';

class CarrinhoRoute
{
  private $method;
  private $payload;
  private $query;
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

  public function carrinhoRouting()
  {

    $carrinhoController = new CarrinhoController();

    switch ($this->method) {
      case self::GET:
        // if ($this->query['id_user']) {
        //   return;
        // }
        echo json_encode($carrinhoController->selecionaCarrinho());
        break;
      case self::POST:
        if ($this->payload['quantidade']) {
          echo json_encode($carrinhoController->removeSomeProducts($this->payload['id_usuario'], $this->payload['id_produto'], $this->payload['quantidade']));
          return;
        }
        echo json_encode($carrinhoController->updateValue($this->payload['id_produto']));
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
