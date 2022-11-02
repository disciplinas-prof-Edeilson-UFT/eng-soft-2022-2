<?php

// O script na head do html impede a página de tentar reevio de post ao ser recarregada.
// Usaremos a classe do CarrinhoController para quando o botão for clicado disparar as funções que irão adicionar o item ao carrinho
// ou incrementar ele.

use src\controllers\CarrinhoController;

include './views/templates/cabecalho.php';
include("controllers/CarrinhoController.php");

// Se ocorrer um post é verificado se esse post é do botão de adicionar ao carrinho, e se for o objeto addcart é criado, e executa a
// função update value da classe CarrinhoController.

if ($_POST) {

	if (isset($_POST['addcart'])) {

		$addcart = new CarrinhoController();
		$addcart->updateValue();
	}
}

?>

<html>

<head>

	<link rel="stylesheet" href="../views/css/Produto.css">

	<script>
		if (window.history.replaceState) {

			window.history.replaceState(null, null, window.location.href);
		}

		function alertaAdicionarCarrinho() {

			alert("item adicionado ao carrinho");
		}
	</script>

</head>

<body class="global">

	<!-- <div class="box-search">

			<input type="search" placeholder="Busque aqui" id="pesquisar">

			<button id="but" onclick="searchData()">Buscar</button>

		</div> -->

	<div class="container">

		<div class="main">
			<h1> <?= $model[0]->nome_produto ?> <?= $model[0]->descricao_produto ?></h1>

			<div class="photo">
				<img src="https://uploaddeimagens.com.br/images/004/084/732/full/produtoimagem.png?1667238087" width="210px">
			</div>

			<div class="end">
				<p class="price"> R$<?= $model[0]->preco_produto ?></p>
				<form class="but" method="POST">

					<input class="button" type="submit" name="addcart" onclick="alertaAdicionarCarrinho ()" value="Comprar">

				</form>
			</div>
		</div>


	</div>

</body>

</html>