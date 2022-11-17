<?php

namespace src\services\factories;

use src\api\src\controllers\UserController as controller ;
use src\services\ApiConfig;

require_once 'vendor/autoload.php';

class UserFactory {
	
  private $apiConfig;
  
  public function __construct(ApiConfig $apiConfig) {
  	
    $this->apiConfig = $apiConfig;
    
  }

  public function login ($name, $data) {
  	
  	return $this -> apiConfig -> instance ("/usuarios/$name", "get", $data);
  	
  }

  public function cadastro ($data){
    return $this->apiConfig->instance("/usuarios", "post", $data);
  }
  
}
