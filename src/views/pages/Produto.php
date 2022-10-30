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

	if (isset ($_POST ['addcart'])) {

		$addcart = new CarrinhoController ();
		$addcart -> updateValue();
	}
}

?>
<head>
  <link rel="stylesheet" href="../views/css/ListaProdutos.css">
</head>

<body>
   <div class="box-search">
    <input type="search" placeholder="Busque aqui" id="pesquisar">
    <button onclick="searchData()">&#128269</button>
  </div>

  <div id="container">
    <header>
    <main>
      <section id="produtos">
        <section class="produtos">
        <section class="produto">
        <img src="../views/assets/img.jpg" width="195px">
        <p><?= $model[0]->nome_produto ?></p>
        <p><?= $model[0]->descricao_produto ?></p>
        <p>R$<?= $model[0]->preco_produto ?></p>
        </section>
        <a href="#"><button>Comprar</button></a>
        </section>
       </section>
    </main>
  </div>
</html>
