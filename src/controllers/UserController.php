<?php
namespace src\controllers;

use src\models\UserModel;
use src\services\Api;

require_once 'vendor/autoload.php';

use PDO;

require_once 'vendor/autoload.php';



class UserController {
	
	public function login ($name, $password) {
		
		// É retornado para a view o resultado da model.
		
		$user = new UserModel ();
		
		$user = $user -> login ($name, $password);
		
		if ($user [0] -> nome_usuario == $name) {
		 	
			$_SESSION ["usuario"] = $user [0]-> nome_usuario;
			$_SESSION ["cpf"] = $user [0] -> cpf_usuario;
			$_SESSION ["id"] = $user [0] -> id_usuario;
			
			return 1;
			
		}
		
	}
	
    
    //public function cadastro_user($nome_usuario, $cpf_usuario){
               
      //  $cadastro=new UserModel();
       // $cadastro->cadastro_usuario($nome_usuario, $cpf_usuario);
          
        
    //}
    
	
}
?>

