<?php

namespace src\api\src\routes;

use src\api\src\controllers\CarrinhoController;

require_once 'vendor/autoload.php';

class CarrinhoRoute
{
  private $method;
  private $payload;
  private $query;
  private $params;
  const GET = 'get';
  const POST = 'post';
  const PUT = 'put';
  const DELETE = 'delete';

  public function __construct($method, $payload, $query, $params)
  {
    $this->method = $method;
    $this->payload = $payload;
    $this->query = $query;
    $this->params = $params;
  }

  public function carrinhoRouting()
  {

    $carrinhoController = new CarrinhoController();

    switch ($this->method) {
      case self::GET:
        
        echo json_encode($carrinhoController->selecionaCarrinho($this->payload['id_usuario']));
        break;
      case self::POST:
        echo json_encode($carrinhoController->updateValue($this->payload['id_usuario'],$this->payload['id_produto']));
        break;

      case self::PUT:
        if ($this->params != 0) {
          echo json_encode($carrinhoController->removeSomeProducts($this->payload['id_usuario'], $this->params, $this->payload['quantidade']));
          return;
        }
        break;

      case self::DELETE:

        break;

      default:
        break;
    }
  }
}
