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


  public function get($userId, $data)
  {
    return $this->apiConfig->instance("/carrinho/" . $userId, 'get', $data);
  }

  public function put($data, $productId)
  {
    return $this->apiConfig->instance("/carrinho/" . $productId, 'put', $data);
  }

  public function post($data)
  {
    return $this->apiConfig->instance("/carrinho", 'post', $data);
  }
}
