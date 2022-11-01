<?php

// O script na head do html impede a página de tentar reevio de post ao ser recarregada.
// Usaremos a classe do CarrinhoController para quando o botão for clicado disparar as funções que irão adicionar o item ao carrinho
// ou incrementar ele.

use src\controllers\CarrinhoController;

include './views/templates/cabecalho.php';
include ("controllers/CarrinhoController.php");

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

			function alertaAdicionarCarrinho ()
			{

				alert ("item adicionado ao carrinho");
			}

		</script>

	</head>

	<body>

		<div class="box-search">

			<input type="search" placeholder="Busque aqui" id="pesquisar">

			<button id="but" onclick="searchData()">Buscar</button>

		</div>

		<div id="container">

			<header>

				<main>

					<section id="produtos">

						<section class="produtos">
						
							<section class="produto">
							
								<img src="../views/assets/img.jpg" width="195px">
							
								<table>
								
									<tr>
									
										<th>Nome</th>
										<th>Preço</th>
										<th>Descrição</th>
										
									</tr>

									<tr>
									
										<td> <?= $model[0]->nome_produto ?></td>
										<td> R$<?= $model[0]->preco_produto ?></td>
										<td><?= $model[0]->descricao_produto ?></td>
										
									</tr>
								
								</table>

							</section>

							<form method="POST">

								<input class = "button" type="submit" name="addcart" onclick = "alertaAdicionarCarrinho ()" value="Comprar">

							</form>

						</section>

					</section>

				</main>

			</header>

		</div>

	</body>

</html>
