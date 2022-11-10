<?php

namespace src;

use src\api\src\ApiRouter;
use src\routes\ProdutoRoute;
use src\routes\CarrinhoRoute;


class Router
{
  private $url;
  private $payload;
  private $method;

  const PRODUTO = 'produto';
  const CARRINHO = 'carrinho';
  const USUARIO = 'usuario';
  const API = "api";

  public function __construct($url, $payload, $method)
  {
    $this->url = $url;
    $this->payload = $payload;
    $this->method = strtolower($method);
  }

  private function routes()
  {

    $var = explode("/", $this->url['path']);
    if ($this->url['query']) {
      parse_str($this->url['query'], $query);
    }

    switch ($var[1]) {
      case self::PRODUTO:
        $instancia = new ProdutoRoute($this->method, $this->payload, $query, $var[2]);
        $instancia->produtoRouting();
        break;
      case self::CARRINHO:
        $instancia = new CarrinhoRoute($this->method, $this->payload, $query, $var[2]);
        $instancia->carrinhoRouting();
        break;
      case self::USUARIO:
        break;
      case self::API:
        $apiRouter = new ApiRouter($var[2], $this->payload, $this->method, $query);
        $apiRouter->apiRouting();
        break;
    }
  }

  public function start()
  {
    $this->routes();
  }
}
