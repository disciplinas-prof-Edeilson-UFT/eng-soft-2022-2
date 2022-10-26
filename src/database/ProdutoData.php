<?php

namespace src\database;

use src\config\Connection;
use PDO;

/* Classe que realiza comunicação com o banco de dados devio ao uso da classe Connection e o PDO. Ás funções contidas nessa classe muito com certeza serão usadas pelo Modelo referente, no caso ProdutoModel*/

class ProdutoData
{

  //Função que recupera atributos especificos da entidade Produto do banco de dados.
  public function select()
  {
    $sql = 'SELECT nome_produto, preco_produto, descricao_produto, id_produto FROM "produto"';
    $con = Connection::getConn();
    $stmt = $con->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }

  //RECUPERAR PRODUTO POR ID. PORTANTO SO ESTÁ FUNCIONANDO QUANDO VC DETERMINA O ID NA CONSULTA, DEVE-SE USAR VARIÁVEL E PASSAR POR PARAMETRO
  public function selectProdutoById()
  {
    $sql = 'SELECT nome_produto, preco_produto, descricao_produto, id_produto FROM "produto" WHERE id_produto = 2';
    $con = Connection::getConn();
    $stmt = $con->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }
  //NÃO ESTÁ FUNCIONANDO COMO DEVERIA ********************************************************
  public function all()
  {
    $con = Connection::getConn();
    $stmt = $con->query('SELECT "nome_produto", "preco_produto" , "quantidade_produto" , "descricao_produto" , "id_produto" FROM "produto"');
    $stocks = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $stocks[] = [
        'nomeProduto' => $row['nome_produto'],
        'precoProduto' => $row['preco_produto'],
        'quantidadeProduto' => $row['quantidade_produto'],
        'descricaoProduto' => $row['descricao_produto'],
        'idProduto' => $row['id_produto']
      ];
    }
    return $stocks;
  }

  public function selectById(int $id_produto)
  {
    include_once 'models/ProdutoModel.php';

    $sql = "SELECT * FROM produto WHERE id_produto = $id_produto";

    $con = Connection::getConn();
    $stmt = $con->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }
}
