<?php

require_once 'vendor/autoload.php';
use src\config\Connection;

include("src/config/Connection.php");

$fon = Connection::getConn();
$response = $fon->prepare('SELECT * FROM "produto"');
$response->execute();
$resultado = [];

if ($response->rowCount() > 0) :
  $resultado = $response->fetchAll(PDO::FETCH_ASSOC);
  $resultado;
else :
  $resultado = [];
endif;

print_r($resultado);