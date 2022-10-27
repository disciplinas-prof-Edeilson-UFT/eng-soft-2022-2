<?php

// É dado um nome para o documento CarrinhoController.php . Esse nome é o que nós iremos nos referir no use src\ .

namespace src\controllers;

use src\models\CarrinhoModel;
include 'models\CarrinhoModel.php';


class CarrinhoController
{
    // Usaremos a classe do CarrinhoModel e a classe do CarrinhoData.

    public function updateValue()
    {

        // Aqui é onde conseguiremos o id do produto que deve ser incrementado. Já que o id dele está na url, verificamos 
        // primeiramente se ele realmente está lá, e se estiver criamos o objeto model e mandamos ele executar a função 
        // execute que está na classe CarrinhoModel, passando o id do produto que está na url usando o get.

        include 'models/CarrinhoModel.php';
        if (isset($_GET['id_produto'])) {
            
            $model = new CarrinhoModel();

            $model = $model->execute($_GET['id_produto']);
        }
    }

    private function productExists($userId, $productId)
    {
        include 'models/CarrinhoModel.php';
        $model = new CarrinhoModel();
        $response = $model->findOne($userId, $productId);
        if (!$response) {
            return "Product is not in cart";
        }
        return $response;
    }

    public function removeProduct()
    {
        $productExists = $this->productExists(1, 7);
        if (!$productExists) {
            return $productExists;
        }
        include 'models/CarrinhoModel.php';
        $model = new CarrinhoModel();
        $model->delete(1, 7);
        return "Product deleted with success";
    }

    public function removeSomeProducts($quantity, $userId, $productId)
    {
        $productExists = $this->productExists($userId, $productId);
        if (!$productExists) {
            return $productExists;
        }

        if (!$productExists["quantidade_item_carrinho"] >= $quantity) {
            return "Could not remove product quantity";
        }
        include 'models/CarrinhoModel.php';
        $model = new CarrinhoModel();
        $model->update($quantity, $userId, $productId);
    }
}
