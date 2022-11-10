<?php

namespace src\services;

use src\services\factories\CarrinhoFactory;

require_once 'vendor/autoload.php';

class Api
{

  public function carrinho()
  {
    $config = new ApiConfig();
    $carrinhoFactory = new CarrinhoFactory($config);
    return $carrinhoFactory;
  }
}
