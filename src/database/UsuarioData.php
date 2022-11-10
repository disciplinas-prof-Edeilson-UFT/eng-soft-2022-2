<?php
namespace src\database;
use src\config\Connection;
use PDO;
require_once ("vendor/autoload.php");

class UsuarioData{

public function cadastro($nome_usuario, $cpf_usuario){
    $con=Connection::getConn();
    $sql = "INSERT INTO usuario(nome_usuario,cpf_usuario) 
        VALUES ('$nome_usuario','$cpf_usuario')";
    $result = $con->query($sql);
}
}

?>