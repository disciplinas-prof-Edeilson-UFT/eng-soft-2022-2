<?php


namespace src\models;

use src\database\CarrinhoData;

include 'database/CarrinhoData.php';

class CarrinhoModel
{
  public function delete($userId, $productId)
  {
    $cartData = new CarrinhoData();
    $cartData->removeFromCart($userId, $productId);
  }

  public function update($quantity, $userId, $productId)
  {
    $cartData = new CarrinhoData();
    $cartData->updateCartProduct($quantity, $userId, $productId);
  }

  public function findOne($userId, $productId)
  {
    $cartData = new CarrinhoData();
    $response = $cartData->getProduct($userId, $productId);
    return $response;
  }
}
