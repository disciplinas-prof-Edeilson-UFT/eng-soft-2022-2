<?php

namespace src\api\src;

use src\api\src\routes\CarrinhoRoute;

class ApiRouter
{
  private $path;
  private $payload;
  private $method;
  private $query;

  const PRODUTO = 'produto';
  const CARRINHO = 'carrinho';
  const USUARIO = 'usuario';

  public function __construct($path, $payload, $method, $query)
  {
    $this->path = $path;
    $this->payload = $payload;
    $this->method = strtolower($method);
    $this->query = $query;
  }

  public function apiRouting()
  {

    $carrinhoRoute = new CarrinhoRoute($this->method, $this->payload, $this->query);

    switch ($this->path) {
      case self::PRODUTO:
        echo "PRODUTO";
        break;
      case self::CARRINHO:
        $carrinhoRoute->carrinhoRouting();
        break;
      case self::USUARIO:
        echo "USUARIO";
        break;
    }
  }
}
