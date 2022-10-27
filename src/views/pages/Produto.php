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

<html>

<body>

 <head>
 
 	<script>

 		if (window.history.replaceState) {

	 		window.history.replaceState (null, null, window.location.href);
 		}

 	</script>
 
 </head>

  <table>
    <tr>
      <th>Nome</th>
      <th>Preço</th>
      <th>Descrição</th>
    </tr>

    <tr>
      <td> <?= $model[0]->nome_produto ?></td>
      <td> <?= $model[0]->preco_produto ?></td>
      <td><?= $model[0]->descricao_produto ?></td>
      
      
      <form method = "POST"> 
      
      	<input type = "submit" name = "addcart" value = "Comprar">
      
      </form>
    </tr>
  </table>

</body>

</html>
