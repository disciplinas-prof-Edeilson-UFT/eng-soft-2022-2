<?php

namespace src\api\src\routes;

use src\api\src\controllers\UserController;

require_once 'vendor/autoload.php';

class UserRoute
{
  private $method;
  private $payload;
  private $query;
  private $params;
  const GET = 'get';
  const POST = 'post';
  const PUT = 'put';
  const DELETE = 'delete';

  public function __construct($method, $payload, $query, $params)
  {
    $this->method = $method;
    $this->payload = $payload;
    $this->query = $query;
    $this->params = $params;
  }

  public function userRouting() {

    $userController = new UserController();

    switch ($this->method) {
      case self::GET:
        
        echo json_encode($userController -> retrieve ());
        
        break;
      case self::POST:
      
        echo json_encode($userController -> addUser ($this->payload['nome_usuario'], $this->payload['cpf_usuario']));
        
        break;

      case self::PUT:
      
        break;

      case self::DELETE:

        break;

      default:
        break;
    }
  }
}

?>
