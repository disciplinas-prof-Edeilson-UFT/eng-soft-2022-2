<?php

namespace src\models;

use src\services\Api;
use PDO;

require_once 'vendor/autoload.php';

class UserModel {
	
	public function login ($name, $password) {
		
		// Aqui é recebido o resultado da query e se a busca retornou resultado, são armazenados os dados do usuário numa sessão que dura
		// até ele fazer logout. É retornado 1 se tudo ocorreu bem para facilitar o tratamento de erro.
		
		$api = new Api();
		$data = array ("cpf_usuario" => $password);
		
		return $api -> user () -> login ($name, $data);
		
	}
		
}

?>
