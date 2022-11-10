<?php

require_once 'vendor/autoload.php';

use src\config\Connection;
use src\controllers\CarrinhoController;
use src\api\src\routes\ProdutoRoute;
use src\services\Api;

// include("src/config/Connection.php");

// $fon = Connection::getConn();
// $response = $fon->prepare('SELECT * FROM "carrinho"');
// $response->execute();
// $resultado = [];

// if ($response->rowCount() > 0) :
//   $resultado = $response->fetchAll(PDO::FETCH_ASSOC);
//   $resultado;
// else :
//   $resultado = [];
// endif;
// echo '<pre>';
// print_r($resultado);
// echo '</pre>';

$carrinhoController = new CarrinhoController();

var_dump($carrinhoController->selecionaCarrinho());

// $url = "http://localhost:8080/api/carrinho";

// $data = array(
//   "id_usuario" => 1,
//   "id_produto" => 6,
//   "quantidade" => -1
// );

// $options = array(
//   'http' => array(
//     'method'  => 'POST',
//     'content' => json_encode($data),
//     'header' =>  "Content-Type: application/json\r\n" .
//       "Accept: application/json\r\n"
//   )
// );

// $context  = stream_context_create($options);
// $result = file_get_contents($url, false, $context);
// $response = json_decode($result);
// var_dump($response);

// $teste = new Api();

// $data = array();

// $fon = $teste->carrinho()->get($data);
// var_dump($fon);

