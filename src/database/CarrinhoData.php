<?php

// A view faz um pedido para o controller, o controller faz um pedido para a model, a model faz o pedido para 
//a data e a data executa a query.

// É dado um nome para o documento CarrinhoData.php . Esse nome é o que nós iremos nos referir no use src\ .

namespace src\database;

// Usaremos a classe de conexão com o banco de dados que está no heroku e também o pdo, a orientação a objetos do php.

use src\config\Connection;
use PDO;

require_once 'vendor/autoload.php';

class CarrinhoData
{

	// Nesta função nós pegamos a conexão com o banco, construimos a string e executamos a query no banco de dados.
	// O id do produto começa a ser pego na view, passado para a controller, passado para a model e aqui usamos ele para incrementar o item
	//específico considerando que por hora, quem está utilizando o site é o usuário 1. 

	public function addCarrinho($id_usuario,$id_produto)
	{

		// Caso você vá fazer a part de adicionar item ao carrinho caso ele não esteja no carrinho, o código abaixo é de incrementar no
		// carrinho caso o item já exista lá. Penso em fazer uma busca no banco tentando achar o item, se a quantidade dele for >= 1 ele
		// já existe no carinho, logo o código abaixo é chamado, senão o item é inserido no carrinho.

		$con = Connection::getConn();

		// query para quantidade do item no carrinho
		$sql = $con->query("SELECT quantidade_item_carrinho FROM CARRINHO WHERE id_produto = '$id_produto' AND id_usuario = '$id_usuario'");

		// Checa se o item ja existe no carrinho. 
		// Se TRUE, o rowCount será maior que 0, realiza um UPDATE na quantidade_item_carrinho. 
		// Se FALSE, o rowCount será igual a 0, adiciona uma nova tupla para o item.	

		if ($sql->rowCount() > 0) :
			$sql = "UPDATE CARRINHO SET quantidade_item_carrinho = quantidade_item_carrinho + 1
				WHERE id_produto = '$id_produto' AND id_usuario = '$id_usuario'";
		else :
			$sql =  "INSERT INTO CARRINHO VALUES (1,$id_usuario,$id_produto)";
		endif;

		// Commit a query no Carrinho.
		$con->query($sql);
	}

	public function removeFromCart($userId)
	{
		$sql = "DELETE FROM carrinho WHERE id_usuario = ?";
		$con = Connection::getConn()->prepare($sql);
		$con->bindValue(1, $userId);
		$con->execute();
	}

	public function removeOneProductFromCart($userId, $productId)
	{
		$sql = "DELETE FROM carrinho WHERE id_usuario = ? AND id_produto = ?";
		$con = Connection::getConn()->prepare($sql);
		$con->bindValue(1, $userId);
		$con->bindValue(2, $productId);
		$con->execute();
	}

	public function updateCartProduct($userId, $productId, $quantity)
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

	public function getProduct($userId, $productId)
	{
		$sql = "SELECT * FROM carrinho WHERE id_usuario = ? AND id_produto = ?";
		$con = Connection::getConn()->prepare($sql);
		$con->bindValue(1, $userId);
		$con->bindValue(2, $productId);
		$con->execute();

		$response = $con->fetch();

		return $response;
	}

	public function selectCarrinho($userid)
	{

		$conexao = Connection::getConn();
		$sql = "SELECT produto.nome_produto, carrinho.quantidade_item_carrinho, carrinho.id_produto, produto.preco_produto, usuario.id_usuario
		FROM carrinho INNER JOIN usuario ON carrinho.id_usuario = usuario.id_usuario INNER JOIN produto ON carrinho.id_produto = produto.id_produto WHERE carrinho.id_usuario = '$userid';";
		$stmt = $conexao->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_CLASS);
	}

	public function showPrice($userid)
	{

		// É estabelecida a conexão com o banco de dados, e em seguida realizada uma query.
		// A query retornará um dado que não pode ser mostrado diretamente na tela, então vamos usar uma função que vai
		// transformar tudo que foi pego numa array e retornaremos o valor.

		$con = Connection::getConn();
		$sql = "SELECT SUM (pr.preco_produto * cr.quantidade_item_carrinho) FROM PRODUTO AS pr
		INNER JOIN CARRINHO as cr
		ON pr.id_produto = cr.id_produto WHERE cr.id_usuario = '$userid';";
		$con = $con->query($sql)->fetchAll(PDO::FETCH_CLASS);
		return $con;
	}
}
