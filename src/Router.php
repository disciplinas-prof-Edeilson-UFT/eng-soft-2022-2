<?php

namespace src;

use src\api\src\ApiRouter;
use src\routes\ProdutoRoute;
use src\routes\CarrinhoRoute;
use src\routes\UserRoute;
use src\routes\UsuarioRoute;


session_start();

class Router
{
  private $url;
  private $payload;
  private $method;

  const PRODUTO = 'produtos';
  const CARRINHO = 'carrinho';
  const USUARIO = 'usuario';
  const LOGIN = "login";
  const PERFIL = "perfil";
  const API = "api";
  const CADASTRO = 'cadastro';


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

    $params = 0;
    if (isset($var[2])) {
      $params = $var[2];
    }
    switch ($var[1]) {
      case self::PRODUTO:
        $instancia = new ProdutoRoute($this->method, $this->payload, $query, $params);
        $instancia->produtoRouting();
        break;
      case self::CARRINHO:
        $instancia = new CarrinhoRoute($this->method, $this->payload, $query, $params);
        $instancia->carrinhoRouting();
        break;
      case self::USUARIO:
        $instancia = new UsuarioRoute($this->method, $this->payload, $this->query);
        $instancia->usuarioRouting();
        break;
      case self::CADASTRO:
        $instancia = new UserRoute($this->method, $this->payload, $this->query);
        $instancia->usuarioRouting_cadastro();
        break;
      case self::LOGIN:
        $instancia = new UserRoute($this->method, $this->payload, $this->query);
        $instancia->loginRouting();
        break;
      case self::API:
        $apiRouter = new ApiRouter($var[2], $this->payload, $this->method, $query);
        $apiRouter->apiRouting();
        break;
      case self::PERFIL:
        $instancia = new UserRoute($this->method, $this->payload, $this->query);
        $instancia->perfilRouting();
        break;
    }
  }

  public function start()
  {
    $this->routes();
  }
}
