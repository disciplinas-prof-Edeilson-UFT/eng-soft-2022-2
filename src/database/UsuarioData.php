<?php
namespace src\database;
use src\config\Connection;
use PDO;
require_once ("vendor/autoload.php");

class UsuarioData{

    public function login ($name, $password) {
		
		// Seleciona o usuário no banco de acordo com o que ele digitou no login, e devolve o resultado para a model.
		
		$con = Connection::getConn ();
		
		$query = "SELECT * FROM USUARIO WHERE nome_usuario = '$name' AND cpf_usuario = '$password'";
		
		$con = $con -> query ($query);
			
		return $con;
		
	}

    public function cadastro($nome_usuario, $cpf_usuario){
        $con=Connection::getConn();
        $sql = "INSERT INTO usuario(nome_usuario,cpf_usuario) 
            VALUES ('$nome_usuario','$cpf_usuario')";
        $result = $con->query($sql);
    }

}

?>