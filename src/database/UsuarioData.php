<?php
namespace src\database;
use src\config\Connection;
use PDO;
require_once ("vendor/autoload.php");

class UsuarioData{

public function cadastro(){
    $con=Connection::getConn();
$result = $con->query("INSERT INTO usuarios(nome,senha,email,telefone,sexo,data_nasc,cidade,estado,endereco) 
        VALUES ('$nome','$senha','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
}
}

?>