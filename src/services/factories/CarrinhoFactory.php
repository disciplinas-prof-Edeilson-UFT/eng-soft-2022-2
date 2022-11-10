<?php

namespace src\services\factories;

use src\services\ApiConfig;

require_once 'vendor/autoload.php';

class CarrinhoFactory
{

  private $apiConfig;

  public function __construct(ApiConfig $apiConfig)
  {
    $this->apiConfig = $apiConfig;
  }


  public function get($data)
  {
    return $this->apiConfig->instance("/carrinho", 'get', $data);
  }
}
