<?php


namespace src\models;

use src\database\CarrinhoData;

include __DIR__ . '/../database/CarrinhoData.php';
// include("../src/config/Connection.php");

class CarrinhoModel
{
  public function delete($userId)
  {
    $cartData = new CarrinhoData();
    $cartData->removeFromCart($userId);
  }

  public function update($quantity, $userId, $productId) {
    $cartData = new CarrinhoData();
    $cartData->updateCartProduct($quantity, $userId, $productId);
  }

  public function findOne($userId, $productId)
  {
    $cartData = new CarrinhoData();
    $response = $cartData->getProduct($userId, $productId);
    return $response;
  }

  public function execute($id_produto)
  {

    $execution = new CarrinhoData();
    $execution->addCarrinho($id_produto);
  }

  public function selecionaCarrinho()
  {
    $exec  = new CarrinhoData();

    $rows = $exec->selectCarrinho();
    return $rows;
  }
  
  public function showPrice () {
  	
	  $cartData = new CarrinhoData ();
	  
	  $value = $cartData -> showPrice ();
	  
	  return $value;
  
  }
}
