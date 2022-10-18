<?php

namespace src\database;

use src\config\Connection;
use PDO;

class ProdutoData
{

  public function select()
  {
    $sql = 'SELECT nome_produto, preco_produto, descricao_produto FROM "produto"';
    $con = Connection::getConn();
    $stmt = $con->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }
}
