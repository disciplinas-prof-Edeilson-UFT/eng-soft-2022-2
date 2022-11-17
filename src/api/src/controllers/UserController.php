<?php

namespace src\api\src\controllers;

use src\api\src\models\UserModel;
use PDO;

require_once 'vendor/autoload.php';

class UserController {
	
	public function retrieve () {
		
		$user = new UserModel ();
		
		$link = parse_url($_SERVER['REQUEST_URI']);
		
		$link = explode ("/", $link ['path']);
		
		if (!isset ($link [3])) {
			
			$user = $user -> retrieveUsers ();
			
		} else {
			
			$user = $user -> retrieveUser ($link [3]);
			
		}
		
		$user = $user -> fetchAll (PDO::FETCH_CLASS);
		
		return $user;
		
	}

	public function addUser($nome_usuario, $cpf_usuario){
		$model = new UserModel;
		$model = $model->insertUser($nome_usuario, $cpf_usuario);
		return $model;
	}
	
}

?>
