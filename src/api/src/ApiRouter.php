<?php

namespace src\api\src;

use src\api\src\routes\CarrinhoRoute;
use src\api\src\routes\ProdutoRoute;
use src\api\src\routes\UserRoute;

class ApiRouter
{
  private $path;
  private $payload;
  private $method;
  private $query;

  const PRODUTO = 'produtos';
  const CARRINHO = 'carrinho';
  const USUARIO = 'usuarios';

  public function __construct($path, $payload, $method, $query)
  {
    $this->path = $path;
    $this->payload = $payload;
    $this->method = strtolower($method);
    $this->query = $query;
  }

  public function apiRouting()
  {
    $url = parse_url($_SERVER['REQUEST_URI']);
    $var = explode("/", $url['path']);

    $params = 0;
    if (isset($var[3])) {
      $params = $var[3];
    }

    $carrinhoRoute = new CarrinhoRoute($this->method, $this->payload, $this->query, $params);
    $produtoRoute = new ProdutoRoute($this->method, $this->payload, $this->query, $params);
    $userRoute = new UserRoute ($this->method, $this->payload, $this->query, $params);

    switch ($this->path) {
      case self::PRODUTO:
        $produtoRoute->produtoRouting();
        break;
      case self::CARRINHO:
        $carrinhoRoute->carrinhoRouting();
        break;
      case self::USUARIO:
      	$userRoute -> userRouting ();
        break;
    }
  }
}

?>
