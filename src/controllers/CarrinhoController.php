<?php

namespace src\controllers;

use src\models\CarrinhoModel;

include 'models/CarrinhoModel.php';

class CarrinhoController
{
    private static $cartModel;

    public function __construct(){
        $this->cartModel = new CarrinhoModel();
    }

    private function productExists($userId, $productId) {
        $response = $this->cartModel.findOnde($userId, $productId);
        if (!$response) {
            return "Product is not in cart";
        }
        return $response;
    }

    public function removeProduct($userId, $productId) {
        $productExists = $this->productExists($userId, $productId);
        if (!$productExists) {
            return $productExists;
        }
        $this->cartModel.delete($userId, $productId);
        return "Product deleted with success";
    }

    public function removeSomeProducts($quantity, $userId, $productId) {
        $productExists = $this->productExists($userId, $productId);
        if (!$productExists) {
            return $productExists;
        }

        if (!$productExists["quantidade_item_carrinho"] >= $quantity) {
            return "Could not remove product quantity";
        }

        $this->cartModel.update($quantity, $userId, $productId);
    }
}
