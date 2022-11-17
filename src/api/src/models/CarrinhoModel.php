<?php


namespace src\api\src\models;

use PDO;
use src\config\Connection;
use src\database\CarrinhoData;

require_once 'vendor/autoload.php';
// include __DIR__ . '/../database/CarrinhoData.php';

class CarrinhoModel
{
  public function delete($userId)
  {
    $sql = "DELETE FROM carrinho WHERE id_usuario = ?";
    $con = Connection::getConn()->prepare($sql);
    $con->bindValue(1, $userId);
    $con->execute();
  }

  public function deleteOne($userId, $productId)
  {
    $sql = "DELETE FROM carrinho WHERE id_usuario = ? AND id_produto = ?";
    $con = Connection::getConn()->prepare($sql);
    $con->bindValue(1, $userId);
    $con->bindValue(2, $productId);
    $con->execute();
  }

  public function update($userId, $productId, $quantity)
  {
    $sql = "UPDATE carrinho SET quantidade_item_carrinho = ? WHERE id_usuario = ? AND id_produto = ?";
    $con = Connection::getConn()->prepare($sql);
    $con->bindValue(1, $quantity);
    $con->bindValue(2, $userId);
    $con->bindValue(3, $productId);
    $con->execute();

    $response = $con->fetch();
    return $response;
  }

  public function findOne($userId, $productId)
  {
    $sql = "SELECT * FROM carrinho WHERE id_usuario = ? AND id_produto = ?";
    $con = Connection::getConn()->prepare($sql);
    $con->bindValue(1, $userId);
    $con->bindValue(2, $productId);
    $con->execute();

    $response = $con->fetch();

    return $response;
  }

  public function execute($userId, $id_produto)
  {

    $con = Connection::getConn();
    $sql = $con->query("SELECT quantidade_item_carrinho FROM CARRINHO WHERE id_produto = '$id_produto'");

    if ($sql->rowCount() > 0) :
      $sql = "UPDATE CARRINHO SET quantidade_item_carrinho = quantidade_item_carrinho + 1
				WHERE id_produto = '$id_produto' AND id_usuario = $userId";
    else :
      $sql =  "INSERT INTO CARRINHO VALUES (1,$userId,$id_produto)";
    endif;

    $con->query($sql);
  }

  public function selecionaCarrinho($userId)
  {

    $conexao = Connection::getConn();
    $sql = "SELECT produto.nome_produto, carrinho.quantidade_item_carrinho, carrinho.id_produto, produto.preco_produto, usuario.id_usuario
		FROM carrinho INNER JOIN usuario ON carrinho.id_usuario = usuario.id_usuario INNER JOIN produto ON carrinho.id_produto = produto.id_produto WHERE carrinho.id_usuario = $userId";
    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    return $stmt->fetchAll(PDO::FETCH_CLASS);
  }

  public function showPrice()
  {
    $con = Connection::getConn();
    $sql = "SELECT SUM (pr.preco_produto * cr.quantidade_item_carrinho) FROM PRODUTO AS pr
		INNER JOIN CARRINHO as cr
		ON pr.id_produto = cr.id_produto";
    $con = $con->query($sql)->fetchAll(PDO::FETCH_CLASS);
    return $con;
  }
}
