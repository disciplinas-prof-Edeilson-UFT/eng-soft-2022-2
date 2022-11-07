<?php

namespace src;

use src\routes\ProdutoRoute;
use src\routes\CarrinhoRoute;

include __DIR__ . '/./views/templates/cabecalho.php';

class Router
{
  private $url;
  private $payload;
  private $method;

  const PRODUTO = 'produto';
  const CARRINHO = 'carrinho';
  const USUARIO = 'usuario';

  public function __construct($url, $payload, $method)
  {
    $this->url = $url;
    $this->payload = $payload;
    $this->method = strtolower($method);
  }

  private function routes()
  {

    parse_str($this->url['query'], $params);
    $var = explode("/", $this->url['path']);
    // var_dump($this->method);

    switch ($var[1]) {
      case self::PRODUTO:
        $instancia = new ProdutoRoute($this->method, $this->payload, $this->query, $var[2]);
        $instancia->produtoRouting();
        break;
      case self::CARRINHO:
        $instancia = new CarrinhoRoute($this->method, $this->payload, $this->query);
        $instancia->carrinhoRouting();
        break;
      case self::USUARIO:
        break;
    }
  }

  public function start()
  {
    $this->routes();
  }
}
