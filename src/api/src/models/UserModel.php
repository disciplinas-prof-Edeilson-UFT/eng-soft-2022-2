<?php


namespace src\api\src\models;

use PDO;
use src\config\Connection;

require_once 'vendor/autoload.php';
// include __DIR__ . '/../database/CarrinhoData.php';

class UserModel {
  
  public function retrieveUsers () {
		
		// Seleciona o usuário no banco de acordo com o que ele digitou no login, e devolve o resultado para a model.
		
		$con = Connection::getConn ();
		
		$query = "SELECT * FROM USUARIO";
		
		$con = $con -> query ($query);
			
		return $con;
		
	}
	
	public function retrieveUser ($name) {
		
		// Seleciona o usuário no banco de acordo com o que ele digitou no login, e devolve o resultado para a model.
		
		$con = Connection::getConn ();
		
		$query = "SELECT * FROM USUARIO WHERE nome_usuario = '$name'";
		
		$con = $con -> query ($query);
			
		return $con;
		
	}

	public function insertUser ($nome_usuario, $cpf_usuario){
		$con=Connection::getConn();
        $sql = "INSERT INTO usuario(nome_usuario,cpf_usuario) 
            VALUES ('$nome_usuario','$cpf_usuario')";
        $result = $con->query($sql);
		return $result;
	}
  
}

?>
