<?php

// É dado um nome para o documento CarrinhoController.php . Esse nome é o que nós iremos nos referir no use src\ .

namespace src\controllers;

// Usaremos a classe do CarrinhoModel e a classe do CarrinhoData.

use src\models\CarrinhoModel;
use src\database\CarrinhoData;

// Por um motivo que desconheço foi necessário incluir o CarrinhoModel.php por este método também.

include ("models/CarrinhoModel.php");

class CarrinhoController {
	
	public function updateValue () {
		
		// Aqui é onde conseguiremos o id do produto que deve ser incrementado. Já que o id dele está na url, verificamos 
		// primeiramente se ele realmente está lá, e se estiver criamos o objeto model e mandamos ele executar a função 
		// execute que está na classe CarrinhoModel, passando o id do produto que está na url usando o get.
		
		if (isset ($_GET ['id_produto'])) {

			$model = new CarrinhoModel ();
			
			$model = $model -> execute ($_GET ['id_produto']);
		}
	
	}
	
	public function getCarrinho(){
		$classModel = new CarrinhoModel ();
		$classModel -> selecionaCarrinho ();
		require_once ("../views/pages/VisualizarCarrinho.php")
	}

?>
