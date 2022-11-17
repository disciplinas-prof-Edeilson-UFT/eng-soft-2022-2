<?php

namespace src\routes;

require_once 'vendor/autoload.php';
include __DIR__ . '/../views/templates/cabecalho.php';

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

  public function __construct($method, $payload, $query, $params)
  {
    $this->method = $method;
    $this->payload = $payload;
    $this->query = $query;
    $this->params = $params;
  }

  public function produtoRouting()
  {
    switch ($this->method) {
      case self::GET:
        if ($this->params != 0) {
          include __DIR__ . '/../views/pages/Produto.php';
          return;
        }
        include __DIR__ . '/../views/pages/ListaProdutos.php';
        break;
      case self::POST:
        include __DIR__ . '/../views/pages/Produto.php';
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
