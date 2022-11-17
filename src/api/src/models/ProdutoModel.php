<?php

namespace src\api\src\models;

use PDO;
use src\config\Connection;

require_once 'vendor/autoload.php';

class ProdutoModel
{
  public function select()
  {
    $sql = 'SELECT nome_produto, preco_produto, descricao_produto, id_produto FROM "produto"';
    $con = Connection::getConn();
    $stmt = $con->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }

  public function selectById(int $id_produto)
  {

    $sql = "SELECT * FROM produto WHERE id_produto = $id_produto";

    $con = Connection::getConn();
    $stmt = $con->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }

  public function selectByAny($data)
  {

    $sql = "SELECT * FROM produto WHERE LOWER(nome_produto) LIKE LOWER('%$data%')";

    $con = Connection::getConn();
    $stmt = $con->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }
}
