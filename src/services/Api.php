<?php

namespace src\services;

use src\services\factories\CarrinhoFactory;
use src\services\factories\ProdutoFactory;
use src\services\factories\UserFactory;

require_once 'vendor/autoload.php';

class Api {

  public function carrinho()
  {
    $config = new ApiConfig();
    $carrinhoFactory = new CarrinhoFactory($config);
    return $carrinhoFactory;
  }

  public function produto()
  {
    $config = new ApiConfig();
    $produtoFactory = new ProdutoFactory($config);
    return $produtoFactory;
  }
  
  public function user() 
  {
  	
  	$config = new ApiConfig();
  	$userFactory = new UserFactory($config);
  	return $userFactory;
  	
  }
}

?>
