<?php

// É dado um nome para o documento CarrinhoModel.php . Esse nome é o que nós iremos nos referir no use src\ .

namespace src\models;

// Usaremos a classe de conexão com o banco de dados que está no heroku e também o pdo, e a classe do CarrinhoData.

use src\database\CarrinhoData;
use src\config\Connection;

// Por um motivo que eu desconheço foi necessário incluir o CarrinhoData.php por este método também.

include ("database/CarrinhoData.php");

class CarrinhoModel {
	
	// Nesta função nós criamos o objeto execution, executamos a função addCarrinho definida no CarrinhoData.php, passando o id do
	// produto dado pelo CarrinhoController.
	
	public function execute ($id_produto) {
		
		$execution = new CarrinhoData ();
		$execution -> addCarrinho($id_produto);
		
	}

    public function selecionaCarrinho(){
        include 'database/CarrinhoData.php';
        $exec  = new CarrinhoData();

        $this->rows = $exec->selectCarrinho();
    }
	
}

?>
